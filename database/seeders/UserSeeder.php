<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@booksales.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'customer 1',
            'email' => 'customer@booksales.com',
            'password' => bcrypt('customer'),
            'role' => 'customer'
        ]);
    }
}
