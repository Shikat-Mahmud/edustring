<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create(
            [
                'name' => 'Saikat Mahmud',
                'email' => 'saikat@edustring.com',
                'role' => 'super_admin',
                'password' => bcrypt('123456'),
            ]
        );

        $admin = User::create(
            [
                'name' => 'Salah Uddin',
                'email' => 'salah@edustring.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ]
        );

        $superAdmin->assignRole('super_admin', 'admin');
        $admin->assignRole('admin');
    }
}
