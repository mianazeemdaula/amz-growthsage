<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Country::create([
            'name' => 'Pakistan',
            'language_id' => '1',
            'iso_code' => '092',
            'dial_code' => '92',
            'currency' => 'PKR',

        ]);
    }
}
