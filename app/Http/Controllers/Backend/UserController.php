<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView(){
       $data['allDataUser']=User::all();
       return view('superadmin.table_user', $data);
    }
    public function UserAdd(){
        //$data['allDataUser']=User::all();
        return view('superadmin.create_user');
     }
     public function UserStore(Request $request){
        
        $validatedData=$request->validate([
           'email' => 'required|unique:users',
           'textNama' => 'required',
        ]);
        
        $data=new User();

        $data->name=$request->textNama;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->usertype=$request->selectUser;
        
        $data->save();

       

        return redirect()->route('user.view')->with('info','Data added Successfully');

}
   public function UserEdit($id){
        //dd('berhasil masuk edit');

        $editData = User::find($id);
        return view('superadmin.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){
        $validatedData=$request->validate([
            'email' =>'required|unique:users',
            'textNama' =>'required',
        ]);
        
        $data=User::find($id);
        $data->usertype=$request->selectUser;
        $data->name=$request->textNama;
        $data->email=$request->email;
        // $data->hp=$request->textHP;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        $data->save();

        return redirect()->route('user.view')->with('info','Update user berhasil');
    }

    public function UserDelete($id){
        //dd('berhasil masuk edit');

        $deleteData = User::find($id);
        $deleteData->delete();


        return redirect()->route('user.view')->with('info','Delete user berhasil');
    }
}
