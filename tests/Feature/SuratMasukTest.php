<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuratMasukTest extends TestCase
{
    
    public function test_create_suratmasuk(){

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
    

        $this->visit('adminjurusan/SMasuk/add');

        $this->submitForm('Simpan', [
            'nomor_surat' => '8s34328',
            'tgl_surat'=>'2020-08-12',
            'tgl_diterima'=>'2022-09-02',
            'pengirim'=>'sdsantiio',
            'perihal'=>'nhaowr',
            'disposisi'=>'Biasa',
            'lampiran'=>'haug'
        ]);
        // $this->seeInDatabase('SKeluar', [
        //     'perihal'=>'222'
        // ]);
        $this->seePageIs('adminjurusan/SMasuk/view');

        $this->see('haug');
    }
}
