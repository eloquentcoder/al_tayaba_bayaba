<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_admin_user = User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'super_admin@gmail.com',
            'username' => 'super_admin',
            'password' => bcrypt('password'),
            'user_type' => 'admin'
        ]);

        $super_admin_user->admin()->create([
            'is_super_admin' => true
        ]);

    }
}
