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
        
        // Admin Poli
        $adminpoli = User::create([
            'name' => 'Admin Poli',
            'email' => 'poli@role.com',
            'password' => bcrypt('poli')
        ]);

        $adminpoli->assignRole('admin_poli');
        // Admin Poli
        $adminpoli2 = User::create([
            'name' => 'Admin Poli 2',
            'email' => 'poli2@role.com',
            'password' => bcrypt('poli')
        ]);

        $adminpoli2->assignRole('admin_poli');
        $adminpoli2->assignRole('admin');

        // Kasir
        $kasir = User::create([
            'name' => 'Kasir',
            'email' => 'kasir@role.com',
            'password' => bcrypt('kasir')
        ]);

        $kasir->assignRole('kasir');
        // Kasir dan Admin
        $kasir2 = User::create([
            'name' => 'Kasir 2',
            'email' => 'kasir2@role.com',
            'password' => bcrypt('kasir')
        ]);

        $kasir2->assignRole('kasir');
        $kasir2->assignRole('admin');

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
