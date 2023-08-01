<?php

namespace Database\Seeders;

use App\Models\FeeMode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FeeMode::create(['name' => 'Bank']);
        FeeMode::create(['name' => 'JazzCash']);
    }
}
