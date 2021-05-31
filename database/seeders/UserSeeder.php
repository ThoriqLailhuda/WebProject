<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@role.com',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');
        
        // Dokter
        $dokter = User::create([
            'name' => 'Dokter',
            'email' => 'dokter@role.com',
            'password' => bcrypt('dokter')
        ]);

        $dokter->assignRole('dokter');
        // Dokter dan Admin
        $dokter2 = User::create([
            'name' => 'Dokter 2',
            'email' => 'dokter2@role.com',
            'password' => bcrypt('dokter')
        ]);

        $dokter2->assignRole('dokter');
        $dokter2->assignRole('admin');

        // Perawat
        $perawat = User::create([
            'name' => 'Perawat',
            'email' => 'perawat@role.com',
            'password' => bcrypt('perawat')
        ]);

        $perawat->assignRole('perawat');
        // Perawat dan Admin
        $perawat2 = User::create([
            'name' => 'Perawat 2',
            'email' => 'perawat2@role.com',
            'password' => bcrypt('perawat')
        ]);

        $perawat2->assignRole('perawat');
        $perawat2->assignRole('admin');

        // User biasa
        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@role.com',
            'password' => bcrypt('user')
        ]);

        $user->assignRole('user');

        $user2 = User::create([
            'name' => 'User 2',
            'email' => 'user2@role.com',
            'password' => bcrypt('user')
        ]);

        $user2->assignRole('user');
    }
}
