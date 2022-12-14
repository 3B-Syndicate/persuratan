<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data['allSuratMasuk']=SuratMasuk::all();
        return view('admin.surat_masuk.table', $data);
    }

    public function create()
    {
        return view('admin.surat_masuk.create');
    }

    public function store(Request $request)
    {
        $data= new SuratMasuk();
        $data->Nomor_Surat=$request->nomor_surat;
        $data->Tanggal_Surat=$request->tgl_surat;
        $data->Tanggal_Diterima=$request->tgl_diterima;
        $data->Pengirim=$request->pengirim;
        $data->Perihal=$request->perihal;
        $data->Disposisi=$request->disposisi;
        $data->Lampiran=$request->lampiran;
        
        $data->save();
        return redirect()->route('smasuk.view')->with('info','Data added Successfully');     
    }

    public function edit($id)
    {
        $editData = SuratMasuk::find($id);
        return view('admin.surat_masuk.edit', compact('editData'));
    }

    public function update(Request $request, $id)
    // BELUM
    {
        $data=SuratMasuk::find($id);
        
        $data->isi_Disposisi=$request->isi_disposisi;

        $data->save();
        return redirect()->route('smasuk.view')->with('info','Update Surat berhasil');
    }

    public function destroy($id)
    {
        $deleteData = SuratMasuk::find($id);
        $deleteData->delete();

        return redirect()->route('smasuk.view')->with('info','Delete Surat berhasil');
    }
}
