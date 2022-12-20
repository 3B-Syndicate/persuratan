<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use App\Models\surat_keluar;
use App\Models\notulensi_rapat;
use Illuminate\Http\Request;

class KajurController extends Controller
{
    public function indexSM()
    {
        $data['allSuratMasuk']=SuratMasuk::all();
        return view('kajur.table_suratmasuk', $data);
    }

    public function indexSK()
    {
        $data['allSuratKeluar']=surat_keluar::all();
        return view('kajur.table_suratkeluar', $data);
    }

    public function indexNR()
    {
        $data['AllNotulesiRapat']=notulensi_rapat::all();
        return view('kajur.table_hasilrapat', $data);
    }
}
