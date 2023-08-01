<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
            'name' => 'Super',
            'email' => 'superadmin@mail.com',
            'password' => Hash::make('password'),
            'code' => strtoupper(Str::random(6)),

        ]);
        $user->assignRole('super');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'code' => strtoupper(Str::random(6)),

        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Test User',
            'email' => 'student@mail.com',
            'password' => Hash::make('password'),
            'code' => strtoupper(Str::random(6)),

        ]);
        $user->assignRole('student');
    }
}
