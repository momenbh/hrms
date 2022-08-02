<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([

              'name'=>'admin',
             'email'=>'admin@gmail.com',
             'password'=>bcrypt('12345'),
             'role'=>'admin',

       ]);
       User::create([

        'name'=>'abul',
        'email'=>'abul@gmail.com',
        'password'=>bcrypt('123456'),
       ]);
       User::create([

        'name'=>'babul',
        'email'=>'babul@gmail.com',
        'password'=>bcrypt('12345'),
       ]);

    }

}
