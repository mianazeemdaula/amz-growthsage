<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Course::create([
            'name' => 'Amazon Product Hunting',
            'image' => 'amazon.png',
            'description' => 'We have thoughtfully designed curriculum that combines industry insights and practical skills for you. Upon completion of this program, you will be well-versed with the tools, techniques, and strategies to identify profitable products, understand market trends, and make informed decisions to maximize your earnings',
            'lectures_count' => 36,
            'fee' => 10500,
            'teamleader_reward' => 1,
            'referral_reward' => 1,
            'active' => true,
        ]);
    }
}
