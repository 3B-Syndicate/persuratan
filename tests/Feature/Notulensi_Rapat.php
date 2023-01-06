<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Notulensi_Rapat extends TestCase
{
    public function test_create_notulensirapat(){

        // $user = factory(User::class)->create([
        //     'email'    => 'dosen@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

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
            'nomor_surat' => '23333',
            'tanggal_surat'=>'2/2/2002',
            'ruang_rapat'=>'tuk',
            'perihal'=>'aaa',
            'tipe_rapat'=>'Biasa',
            'validasi'=>'a',
            'notulensi'=>'b'
        ]);
        // $this->seeInDatabase('SKeluar', [
        //     'perihal'=>'222'
        // ]);
        $this->seePageIs('/NRapat/view');

        $this->see('b');
    }
}
