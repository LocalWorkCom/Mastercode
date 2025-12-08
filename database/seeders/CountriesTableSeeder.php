<?php

namespace Database\Seeders;

use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name_en' => 'Egypt', 'name_ar' => 'مصر', 'phone_code' => '+20'],
            ['name_en' => 'Saudi Arabia', 'name_ar' => 'السعودية', 'phone_code' => '+966'],
            ['name_en' => 'United Arab Emirates', 'name_ar' => 'الإمارات', 'phone_code' => '+971'],
            ['name_en' => 'Kuwait', 'name_ar' => 'الكويت', 'phone_code' => '+965'], // Kuwait
            ['name_en' => 'United States', 'name_ar' => 'الولايات المتحدة', 'phone_code' => '+1'],
            ['name_en' => 'United Kingdom', 'name_ar' => 'المملكة المتحدة', 'phone_code' => '+44'],
            ['name_en' => 'India', 'name_ar' => 'الهند', 'phone_code' => '+91'],
            ['name_en' => 'Germany', 'name_ar' => 'ألمانيا', 'phone_code' => '+49'],
            ['name_en' => 'France', 'name_ar' => 'فرنسا', 'phone_code' => '+33'],
            ['name_en' => 'Canada', 'name_ar' => 'كندا', 'phone_code' => '+1'],
            ['name_en' => 'Australia', 'name_ar' => 'أستراليا', 'phone_code' => '+61'],
        ];

        country::truncate();
        country::insert($countries);
    }
}
