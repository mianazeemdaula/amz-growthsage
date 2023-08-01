<?php

namespace Database\Seeders;

use App\Models\Query;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Query::create([
            'email' => 'sample@gmail.com',
            'phone' => '03001234567',
            'question' => 'How can I register Amazon course?'
        ]);
    }
}
