<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Notulensi_Rapat extends TestCase
{
    public function test_create_notulensirapat(){

        // Kunjungi halaman '/login'
        $this->visit('/login');

        // Submit form login dengan email dan password yang tepat
        $this->submitForm('Masuk', [
            'email'    => 'adminjurusan@gmail.com',
            'password' => '12345678',
        ]);

        // Lihat halaman ter-redirect ke url '/home' (login sukses).
        $this->seePageIs('adminjurusan/dashboard');

        // Kita melihat halaman tulisan "Dashboard" pada halaman itu.
        $this->seeText('Dashboard');
    

        $this->visit('adminjurusan/NRapat/add');

        $this->submitForm('Simpan', [
            'tanggal_rapat'=>'2-2-2002',
            'ruang_rapat'=>'tuk',
            'perihal'=>'aaa',
            'tipe_rapat'=>'Biasa',
            'validasi'=>'a',
            'notulensi'=>'b'
        ]);
        // $this->seeInDatabase('SKeluar', [
        //     'perihal'=>'222'
        // ]);
        $this->seePageIs('adminjurusan/NRapat/view');

        $this->see('b');
    }
}
