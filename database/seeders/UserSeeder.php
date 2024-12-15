<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mahasiswa cakep',
            'email' => 'mahasiswa@gmail.com',
            'username' => 'mahasiswa',
            'password' => Hash::make('123456'),
        ]);

    }
}
