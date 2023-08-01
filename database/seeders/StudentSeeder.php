<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Student::create([
            'user_id' => 3,
            'referral_id' => null,
            'language_id' => 1,
            'country_id' => 1,
            'phone' => '03001236482',
            'province' => 'Punjab',
            'city' => 'Depalpur',
            'address' => 'Model Town Depalpur',
            'experience' => '3 years in amanzon',
            'image' => '123.png',
        ]);
    }
}
