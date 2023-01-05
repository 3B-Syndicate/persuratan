<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use App\Models\notulensi_rapat;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function indexSM()
    {
        $data['allSuratMasuk']=SuratMasuk::all();
        return view('dosen.table_suratmasuk', $data);
    }

    public function indexNR()
    {
        $data['AllNotulesiRapat']=notulensi_rapat::all();
        return view('dosen.table_hasilrapat', $data);
    }
}