<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NotulensiRapat;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
  
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function super()
    {
        $userCount = User::count();
        return view('superadmin.index', compact('userCount'));
    } 
  
    public function adminHome()
    {
        $NRCount = NotulensiRapat::count();
        $SMCount = SuratMasuk::count();
        $SKCount = SuratKeluar::count();

        return view('admin.index', compact('NRCount','SMCount','SKCount'));
    }
  
    public function kajurHome()
    {
        $NRCount = NotulensiRapat::count();
        $SMCount = SuratMasuk::count();
        $SKCount = SuratKeluar::count();

        return view('kajur.index', compact('NRCount','SMCount','SKCount'));
    }

    public function kaprodiHome()
    {
        $NRCount = NotulensiRapat::count();
        $SMCount = SuratMasuk::count();
        $SKCount = SuratKeluar::count();

        return view('kaprodi.index', compact('NRCount','SMCount','SKCount'));
    }
    public function dosenHome()
    {
        $NRCount = NotulensiRapat::count();
        $SMCount = SuratMasuk::count();

        return view('dosen.index', compact('NRCount','SMCount'));
    }
}