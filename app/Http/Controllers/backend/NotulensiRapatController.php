<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\NotulensiRapat;
use Illuminate\Http\Request;

class NotulensiRapatController extends Controller
{
    public function index()
    {
        $data['AllNotulesiRapat']=NotulensiRapat::all();
        return view('admin.notulensi_rapat.table', $data);
    }

    public function create()
    {
        return view('admin.notulensi_rapat.create');
    }

    public function store(Request $request)
    {
        $nomor_surat="SK".date("ymdHis");

        $data= new NotulensiRapat();
        $data->Nomor_Surat=$nomor_surat;
        $data->Tanggal_Rapat=$request->tanggal_rapat;
        $data->Ruang_Rapat=$request->ruang_rapat;
        $data->Perihal=$request->perihal;
        $data->Tipe_Rapat=$request->tipe_rapat;
        $data->Validasi=$request->validasi;
        $data->Notulensi=$request->notulensi;
        
        $data->save();
        return redirect()->route('nrapat.view')->with('info','Data added Successfully'); 
    }

    public function show($id)
    {
        $showData = NotulensiRapat::find($id);
        return view('view_notulensiR', compact('showData'));
    }

    public function edit($id)
    {
        $editData = NotulensiRapat::find($id);
        return view('admin.notulensi_rapat.edit', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $data=NotulensiRapat::find($id);
        $data->Ruang_Rapat=$request->ruang_rapat;
        $data->Tipe_Rapat=$request->tipe_rapat;
        $data->Validasi=$request->validasi;
        $data->Notulensi=$request->notulensi;

        $data->save();
        return redirect()->route('nrapat.view')->with('info','Update Surat berhasil');
    }

    public function destroy($id)
    {
        $deleteData = NotulensiRapat::find($id);
        $deleteData->delete();

        return redirect()->route('nrapat.view')->with('info','Delete Surat berhasil');
    }
}