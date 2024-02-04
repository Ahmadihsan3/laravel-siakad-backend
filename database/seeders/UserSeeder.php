<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Ihsan',
            'email' => 'ihsan@fic11.com',
            'password' => Hash::make('1234567890'),
            'roles' => 'Admin',
            'phone' => '086617263612',
        ]);
    }
}
