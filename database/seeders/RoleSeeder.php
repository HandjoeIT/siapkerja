<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'direktur',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'manager',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'sekretaris',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'koordinator',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'karyawan',
            'guard_name' => 'web'
        ]);
    }
}
