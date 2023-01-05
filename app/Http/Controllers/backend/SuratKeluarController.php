<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $data['allSuratKeluar']=SuratKeluar::all();
        return view('admin.surat_keluar.table', $data);
    }

    public function create()
    {
        return view('admin.surat_keluar.create');
    }

    public function store(Request $request)
    {
        $nomor_surat="SK".date("ymdHis");

        $data= new SuratKeluar();
        $data->Nomor_Surat=$nomor_surat;
        $data->Tanggal_Surat=$request->tanggal_surat;
        $data->Perihal=$request->perihal;
        $data->Prodi=$request->prodi;
        $data->Kepada=$request->kepada;
        $data->Disposisi=$request->disposisi;
        
        $data->save();
        return redirect()->route('skeluar.view')->with('info','Data added Successfully');     
    }

    public function edit($id)
    {
        $editData = SuratKeluar::find($id);
        return view('admin.surat_keluar.edit', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $data=SuratKeluar::find($id);
        $data->Prodi=$request->prodi;
        $data->Kepada=$request->kepada;
        $data->Disposisi=$request->disposisi;

        $data->save();
        return redirect()->route('skeluar.view')->with('info','Update Surat berhasil');
    }

    public function destroy($id)
    {
        $deleteData = SuratKeluar::find($id);
        $deleteData->delete();

        return redirect()->route('skeluar.view')->with('info','Delete Surat berhasil');
    }
}