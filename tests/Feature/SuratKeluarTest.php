<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuratKeluarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    
    public function test_create_suratkeluar(){

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
    

        $this->visit('adminjurusan/SKeluar/add');

        $this->submitForm('Simpan', [
            'tanggal_surat'=>'4/12/12',
            'perihal'=>'222',
            'prodi'=>'ac',
            'kepada'=>'ac',
            'disposisi'=>'biasa'
        ]);
        // $this->seeInDatabase('SKeluar', [
        //     'perihal'=>'222'
        // ]);
        $this->seePageIs('adminjurusan/SKeluar/view');

        $this->see('222');
    }
}
