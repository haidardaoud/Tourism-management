<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>1,
            'image'=>Storage::url('image/Four Seasons Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>2,
            'image'=>Storage::url('image/Beit Al-Mamlouka Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>3,
            'image'=>Storage::url('image/Sheraton Hotel9.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>4,
            'image'=>Storage::url('image/Dama Rose Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>5,
            'image'=>Storage::url('image/Beit Al-Wali Hotel9.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>6,
            'image'=>Storage::url('image/Bab Touma Hotel9.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>7,
            'image'=>Storage::url('image/Fardoss Tower Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>7,
            'image'=>Storage::url('image/Fardoss Tower Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>7,
            'image'=>Storage::url('image/Fardoss Tower Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>7,
            'image'=>Storage::url('image/Fardoss Tower Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>7,
            'image'=>Storage::url('image/Fardoss Tower Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>8,
            'image'=>Storage::url('image/Beit Zaman Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>9,
            'image'=>Storage::url('image/Blue Tower Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>10,
            'image'=>Storage::url('image/Antradous Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>11,
            'image'=>Storage::url('image/Shahin Tower Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>11,
            'image'=>Storage::url('image/Shahin Tower Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>11,
            'image'=>Storage::url('image/Shahin Tower Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>11,
            'image'=>Storage::url('image/Shahin Tower Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>11,
            'image'=>Storage::url('image/Shahin Tower Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>12,
            'image'=>Storage::url('image/Holiday Beach Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>13,
            'image'=>Storage::url('image/Royal Inn Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>14,
            'image'=>Storage::url('image/Al Saleh Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>14,
            'image'=>Storage::url('image/Al Saleh Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>14,
            'image'=>Storage::url('image/Al Saleh Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>15,
            'image'=>Storage::url('image/Afamia hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>16,
            'image'=>Storage::url('image/Al Samman Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>16,
            'image'=>Storage::url('image/Al Samman Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>16,
            'image'=>Storage::url('image/Al Samman Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>16,
            'image'=>Storage::url('image/Al Samman Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>16,
            'image'=>Storage::url('image/Al Samman Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>16,
            'image'=>Storage::url('image/Al Samman Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>17,
            'image'=>Storage::url('image/La Mira Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>18,
            'image'=>Storage::url('image/Golden Beach Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>19,
            'image'=>Storage::url('image/Safir Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>19,
            'image'=>Storage::url('image/Safir Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>19,
            'image'=>Storage::url('image/Safir Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>19,
            'image'=>Storage::url('image/Safir Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>19,
            'image'=>Storage::url('image/Safir Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>19,
            'image'=>Storage::url('image/Safir Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>20,
            'image'=>Storage::url('image/Beit Zaid Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>20,
            'image'=>Storage::url('image/Beit Zaid Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>21,
            'image'=>Storage::url('image/Baron Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>21,
            'image'=>Storage::url('image/Baron Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>21,
            'image'=>Storage::url('image/Baron Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>21,
            'image'=>Storage::url('image/Baron Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>21,
            'image'=>Storage::url('image/Baron Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>22,
            'image'=>Storage::url('image/Palace Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>22,
            'image'=>Storage::url('image/Palace Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>22,
            'image'=>Storage::url('image/Palace Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>22,
            'image'=>Storage::url('image/Palace Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>22,
            'image'=>Storage::url('image/Palace Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>22,
            'image'=>Storage::url('image/Palace Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>23,
            'image'=>Storage::url('image/Al Shahba Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>23,
            'image'=>Storage::url('image/Al Shahba Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>23,
            'image'=>Storage::url('image/Al Shahba Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>23,
            'image'=>Storage::url('image/Al Shahba Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>23,
            'image'=>Storage::url('image/Al Shahba Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>23,
            'image'=>Storage::url('image/Al Shahba Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>24,
            'image'=>Storage::url('image/Beit Salahieh Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>24,
            'image'=>Storage::url('image/Beit Salahieh Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>24,
            'image'=>Storage::url('image/Beit Salahieh Hotel3.jpg')
        ]);
        DB::table('images')->insert([
        'hotel_id'=>24,
        'image'=>Storage::url('image/Beit Salahieh Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>24,
            'image'=>Storage::url('image/Beit Salahieh Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>24,
            'image'=>Storage::url('image/Beit Salahieh Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>24,
            'image'=>Storage::url('image/Beit Salahieh Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>25,
            'image'=>Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>26,
            'image'=>Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>27,
            'image'=>Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>27,
            'image'=>Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>27,
            'image'=>Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>27,
            'image'=>Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>27,
            'image'=>Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>27,
            'image'=>Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>28,
            'image'=>Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>29,
            'image'=>Storage::url('image/Taj Exotica Resort & Spa, The Palm, Dubai8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>30,
            'image'=>Storage::url('image/Caesars Palace Dubai7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>31,
            'image'=>Storage::url('image/The Dubai EDITION7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>32,
            'image'=>Storage::url('image/Sofitel Dubai The Obelisk7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>33,
            'image'=>Storage::url('image/Address Sky View7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>34,
            'image'=>Storage::url('image/The Act Hotel Sharjah1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>34,
            'image'=>Storage::url('image/The Act Hotel Sharjah2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>34,
            'image'=>Storage::url('image/The Act Hotel Sharjah3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>34,
            'image'=>Storage::url('image/The Act Hotel Sharjah4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>34,
            'image'=>Storage::url('image/The Act Hotel Sharjah5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>34,
            'image'=>Storage::url('image/The Act Hotel Sharjah6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>35,
            'image'=>Storage::url('image/Sheraton Sharjah Resort & Spa1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>35,
            'image'=>Storage::url('image/Sheraton Sharjah Resort & Spa2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>35,
            'image'=>Storage::url('image/Sheraton Sharjah Resort & Spa3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>35,
            'image'=>Storage::url('image/Sheraton Sharjah Resort & Spa4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>35,
            'image'=>Storage::url('image/Sheraton Sharjah Resort & Spa5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>35,
            'image'=>Storage::url('image/Sheraton Sharjah Resort & Spa6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>36,
            'image'=>Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>37,
            'image'=>Storage::url('image/Occidental Sharjah Grand7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>38,
            'image'=>Storage::url('image/Ajman Saray, a Luxury Collection Resort7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>39,
            'image'=>Storage::url('image/Fairmont Ajman7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>40,
            'image'=>Storage::url('image/Radisson Blu Ajman1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>40,
            'image'=>Storage::url('image/Radisson Blu Ajman2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>40,
            'image'=>Storage::url('image/Radisson Blu Ajman3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>40,
            'image'=>Storage::url('image/Radisson Blu Ajman4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>40,
            'image'=>Storage::url('image/Radisson Blu Ajman5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>40,
            'image'=>Storage::url('image/Radisson Blu Ajman6.jpg')
        ]);
        DB::table('images')->insert([
        'hotel_id'=>40,
        'image'=>Storage::url('image/Radisson Blu Ajman7.jpg')
    ]);
        DB::table('images')->insert([
            'hotel_id'=>41,
            'image'=>Storage::url('image/The Savoy Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>41,
            'image'=>Storage::url('image/The Savoy Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>41,
            'image'=>Storage::url('image/The Savoy Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>41,
            'image'=>Storage::url('image/The Savoy Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>41,
            'image'=>Storage::url('image/The Savoy Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>41,
            'image'=>Storage::url('image/The Savoy Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>42,
            'image'=>Storage::url('image/The Ritz Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>42,
            'image'=>Storage::url('image/The Ritz Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>42,
            'image'=>Storage::url('image/The Ritz Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>42,
            'image'=>Storage::url('image/The Ritz Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>42,
            'image'=>Storage::url('image/The Ritz Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>42,
            'image'=>Storage::url('image/The Ritz Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>43,
            'image'=>Storage::url('image/The Dorchester Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>43,
            'image'=>Storage::url('image/The Dorchester Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>43,
            'image'=>Storage::url('image/The Dorchester Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>43,
            'image'=>Storage::url('image/The Dorchester Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>43,
            'image'=>Storage::url('image/The Dorchester Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>43,
            'image'=>Storage::url('image/The Dorchester Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>44,
            'image'=>Storage::url('image/The Claridges Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>44,
            'image'=>Storage::url('image/The Claridges Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>44,
            'image'=>Storage::url('image/The Claridges Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>44,
            'image'=>Storage::url('image/The Claridges Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>44,
            'image'=>Storage::url('image/The Claridges Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>44,
            'image'=>Storage::url('image/The Claridges Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>45,
            'image'=>Storage::url('image/The Langham Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>45,
            'image'=>Storage::url('image/The Langham Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>45,
            'image'=>Storage::url('image/The Langham Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>45,
            'image'=>Storage::url('image/The Langham Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>45,
            'image'=>Storage::url('image/The Langham Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>45,
            'image'=>Storage::url('image/The Langham Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>46,
            'image'=>Storage::url('image/The Connaught Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>47,
            'image'=>Storage::url('image/The Rosewood Hotel9.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>48,
            'image'=>Storage::url('image/The Four Seasons Hotel9.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>49,
            'image'=>Storage::url('image/Hôtel de Crillon1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>49,
            'image'=>Storage::url('image/Hôtel de Crillon2.jpg')
        ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon3.jpg')
    ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon4.jpg')
    ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon5.jpg')
    ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon6.jpg')
    ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon7.jpg')
    ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon8.jpg')
    ]);
        DB::table('images')->insert([
        'hotel_id'=>49,
        'image'=>Storage::url('image/Hôtel de Crillon9.jpg')
    ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>50,
            'image'=>Storage::url('image/Le Bristol Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>51,
            'image'=>Storage::url('image/Lutetia Hotel9.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel1.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel2.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel3.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel4.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel5.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel6.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel7.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel8.jpg')
        ]);
        DB::table('images')->insert([
            'hotel_id'=>52,
            'image'=>Storage::url('image/The Peninsula Hotel9.jpg')
        ]);

    }
}
