<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\NotulensiRapat;
use Illuminate\Http\Request;

class kaprodiController extends Controller
{
    public function indexSM()
    {
        $data['allSuratMasuk']=SuratMasuk::all();
        return view('kaprodi.table_suratmasuk', $data);
    }

    public function indexSK()
    {
        $data['allSuratKeluar']=SuratKeluar::all();
        return view('kaprodi.table_suratkeluar', $data);
    }

    public function indexNR()
    {
        $data['AllNotulesiRapat']=NotulensiRapat::all();
        return view('kaprodi.table_hasilrapat', $data);
    }
}