<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Super Admin',
               'email'=>'super@gmail.com',
               'usertype'=>'Super Admin',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Admin Jurusan',
               'email'=>'adminjurusan@gmail.com',
               'usertype'=>'Admin Jurusan',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Dosen',
               'email'=>'dosen@gmail.com',
               'usertype'=>'Dosen',
               'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'kajur',
                'email'=>'kajur@gmail.com',
                'usertype'=>'Kajur',
                'password'=> bcrypt('12345678'),
             ],
             [
                'name'=>'Kaprodi',
                'email'=>'kaprodi@gmail.com',
                'usertype'=>'Kaprodi',
                'password'=> bcrypt('12345678'),
             ],

        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
