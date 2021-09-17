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
        $direktur = User::create([
            'name' => 'Direktur',
            'email' => 'direktur@modernshoes.com',
            'phone_number' => '08234567890',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'photo' => 'default.jpg',
            'gender'   => 'laki laki',
        ]);

        $direktur->assignRole('direktur');

        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@modernshoes.com',
            'phone_number' => '08234567890',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'photo' => 'default.jpg',
            'gender'   => 'laki laki',
        ]);

        $manager->assignRole('manager');

        $koordinator = User::create([
            'name' => 'koordinator',
            'email' => 'koordinator@modernshoes.com',
            'phone_number' => '08234567890',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'photo' => 'default.jpg',
            'gender'   => 'laki laki',
        ]);

        $koordinator->assignRole('koordinator');

        $karyawan = User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@modernshoes.com',
            'phone_number' => '08234567890',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'photo' => 'default.jpg',
            'gender'   => 'laki laki',
        ]);

        $karyawan->assignRole('karyawan');
    }
}
