<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use App\Models\NotulensiRapat;
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
        $data['AllNotulesiRapat']=NotulensiRapat::all();
        return view('dosen.table_hasilrapat', $data);
    }
}