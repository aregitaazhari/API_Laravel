<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'rere',
            'email' => 'rere@gmail.com',
            'password' => Hash::make('useradmin')
        ]);

        DB::table('users')->insert([
            'name' => 'Azhari',
            'email' => 'Azhari@gmail.com',
            'password' => Hash::make('useradmin')
        ]);
    }
}
