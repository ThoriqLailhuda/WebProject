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
        // ADMIN
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        // DOKTER
        Role::create([
            'name' => 'dokter',
            'guard_name' => 'web'
        ]);

        // PERAWAT
        Role::create([
            'name' => 'perawat',
            'guard_name' => 'web'
        ]);
        
        // USER (PASIEN)
        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);
    }
}
