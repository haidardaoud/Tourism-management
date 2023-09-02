<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Syria
        DB::table('countries')->insert([
            'Name'=> 'Syria',
            'Region'=> 'Asia',
            'Capital' => 'Damascus',
            'Official_language' => 'Arabic',
            'Area'=>'185,180 square kilometers',
            'Currency'=>'the Syrian pound (SYP)'
        ]);
        //The Unity Arab Emirate
        DB::table('countries')->insert([
            'Name'=> 'The UAE',
            'Region'=> 'The Middle East',
            'Capital' => 'Abu Dhabi',
            'Official_language' => 'Arabic',
            'Area'=>'83,600 square kilometers',
            'Currency'=>'the United Arab Emirates dirham (AED).'
        ]);
        //England
        DB::table('countries')->insert([
            'Name'=> 'England',
            'Region'=> 'Europe',
            'capital' => 'London',
            'Official_language' => 'English',
            'Area'=>'130,395 square kilometers',
            'Currency'=>' the pound sterling (£)'
        ]);
        //France
        DB::table('countries')->insert([
            'Name' => 'Franca',
            'Region' => 'Europe',
            'capital' => 'Paris',
            'Official_language' => 'French',
            'Area'=>'643,801 square kilometers',
            'Currency'=>'the Euro (EUR)'
        ]);
    }

}
