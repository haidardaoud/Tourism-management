<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'email'=>'motasemnassif2@gmail.com',
            'password'=>Hash::make('123456')
        ]);
        Admin::create([
            'email'=> 'zeinalabdensafi@gmail.com',
            'password' => Hash::make('213123')
        ]);
    }
}
