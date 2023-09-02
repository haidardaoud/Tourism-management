<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RoomSeeder extends Seeder
{

    public function run(): void
    {
        //Four Seasons Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>1,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 10,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>1,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 127,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>1,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 127,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>1,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 5,
            'is_available' => true,
            'count' => 0,
        ]);
        //Beit Al-Mamlouka Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>2,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => '285',
            'number_of_person' => 2,
            'number_of_rooms' => 65,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>2,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax ,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 65,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>2,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>2,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0,
        ]);
        //Sheraton Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>3,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 120,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>3,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax ,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 120,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>3,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>3,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0,
        ]);
        //Dama Rose Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>4,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 90,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>4,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 90,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>4,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>4,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0,
        ]);
        //Beit Al-Wali Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>5,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 185,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>5,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax ,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 185,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>5,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>5,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0,
        ]);
        //Bab Touma Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>6,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 55,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>6,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 55,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>6,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 7,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>6,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0,
        ]);
        //Fardoss Tower Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>7,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 150,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>7,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 150,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>7,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>7,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0,
        ]);
        //Beit Zaman Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>8,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 145,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>8,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 145,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>8,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>8,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 3,
            'is_available' => true,
            'count' => 0,
        ]);
        //Blue Tower Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>9,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet,Air Conditioning,TV, Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 285,
            'number_of_person' => 2,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>9,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => ' wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax ,Hairdryer,DVD Player,Office',
            'price' => 315,
            'number_of_person' => 4,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>9,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Wireless internet,AC,TV,Telephone line,Extra bed,Fax,Hairdryer,DVD Player,Desk, Minibar',
            'price' => 415,
            'number_of_person' => 4,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>9,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar ',
            'price' => 550,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0,
        ]);
        //Antradous Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>10,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 135,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>10,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 135,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>10,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 9,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>10,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,
            fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Shahin Tower Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>11,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 180,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>11,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 180,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>11,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>11,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Holiday Beach Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>12,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 10,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>12,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,
             Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 10,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>12,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 5,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>12,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Royal Inn Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>13,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 3,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>13,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>13,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>13,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        //Al Saleh Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>14,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 40,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>14,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 40,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>14,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>14,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Afamia hotel
        DB::table('rooms')->insert([
            'hotel_id'=>15,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 10,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>15,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 10,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>15,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>15,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        //Al Samman Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>16,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 25,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>16,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 25,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>16,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 5,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>16,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //La Mira Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>17,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 20,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>17,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 20,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>17,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>17,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Golden Beach Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>18,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 20,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>18,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 20,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>18,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>18,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Safir Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>19,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>19,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>19,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 5,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>19,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 3,
            'is_available' => true,
            'count' => 0
        ]);
        //Beit Zaid Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>20,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>20,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>20,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 3,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>20,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        //Baron Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>21,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 5,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>21,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 5,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>21,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>21,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 3,
            'is_available' => true,
            'count' => 0
        ]);
        //Palace Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>22,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 13,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>22,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 13,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>22,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>22,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 3,
            'is_available' => true,
            'count' => 0
        ]);
        //Al Shahba Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>23,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 45,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>23,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 45,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>23,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>23,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Beit Salahieh Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>24,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 18,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>24,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 18,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>24,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>24,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 2,
            'is_available' => true,
            'count' => 0
        ]);
        //The WB Abu Dhabi,Curio Collection By Hilton
        DB::table('rooms')->insert([
            'hotel_id'=>25,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 117,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>25,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,
             Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 117,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>25,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>25,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Four Seasons Hotel Abu Dhabi on Al Maryah Island
        DB::table('rooms')->insert([
            'hotel_id'=>26,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 90,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>26,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 90,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>26,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>26,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The St. Regis Saadiyat Island Resort, Abu Dhabi
        DB::table('rooms')->insert([
            'hotel_id'=>27,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 85,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>27,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room1.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 85,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>27,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 10,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>27,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //InterContinental Residences Abu Dhabi, an IHG Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>28,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>28,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>28,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>28,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Taj Exotica Resort & Spa, The Palm, Dubai
        DB::table('rooms')->insert([
            'hotel_id'=>29,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>29,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>29,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>29,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Caesars Palace Dubai
        DB::table('rooms')->insert([
            'hotel_id'=>30,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);

        DB::table('rooms')->insert([
            'hotel_id'=>30,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>30,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>30,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Dubai EDITION
        DB::table('rooms')->insert([
            'hotel_id'=>31,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>31,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>31,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>31,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Sofitel Dubai The Obelisk
        DB::table('rooms')->insert([
            'hotel_id'=>32,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>32,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>32,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>32,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Address Sky View
        DB::table('rooms')->insert([
            'hotel_id'=>33,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>33,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>33,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>33,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Act Hotel Sharjah
        DB::table('rooms')->insert([
            'hotel_id'=>34,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>34,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>34,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>34,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Sheraton Sharjah Resort & Spa
        DB::table('rooms')->insert([
            'hotel_id'=>35,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>35,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>35,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>35,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //DoubleTree by Hilton Sharjah Waterfront Hotel And Residences
        DB::table('rooms')->insert([
            'hotel_id'=>36,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>36,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>36,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>36,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Occidental Sharjah Grand
        DB::table('rooms')->insert([
            'hotel_id'=>37,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>37,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>37,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>37,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Ajman Saray, a Luxury Collection Resort
        DB::table('rooms')->insert([
            'hotel_id'=>38,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>38,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>38,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>38,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Fairmont Ajman
        DB::table('rooms')->insert([
            'hotel_id'=>39,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>39,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>39,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>39,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Radisson Blu Ajman
        DB::table('rooms')->insert([
            'hotel_id'=>40,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>40,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>40,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>40,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Savoy Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>41,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>41,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>41,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>41,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Ritz Hotel
        DB::table('rooms')->insert([
        'hotel_id'=>42,
        'type' => 'Sweet',
        'image' => Storage::url('Sweet1.jpg'),
        'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
        'price' => 400,
        'number_of_person' => 4,
        'number_of_rooms' => 6,
        'is_available' => true,
        'count' => 0
    ]);
        DB::table('rooms')->insert([
            'hotel_id'=>42,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>42,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>42,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Dorchester Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>43,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>43,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>43,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>43,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Claridges Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>44,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>44,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>44,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>44,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Langham Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>45,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>45,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>45,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>45,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Connaught Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>46,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>46,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>46,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>46,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Rosewood Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>47,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>47,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>47,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>47,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Four Seasons Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>48,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>48,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>48,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>48,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Hôtel de Crillon
        DB::table('rooms')->insert([
            'hotel_id'=>49,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>49,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>49,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>49,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Le Bristol Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>50,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>50,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>50,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>50,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //Lutetia Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>51,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>51,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>51,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>51,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
        //The Peninsula Hotel
        DB::table('rooms')->insert([
            'hotel_id'=>52,
            'type' => 'Sweet',
            'image' => Storage::url('Sweet1.jpg'),
            'description' => 'Chamber Services,Internet Wireless,AC,TV,Telephone line,Extra bed, Fax, Hairdryer,DVD Player, Office',
            'price' => 400,
            'number_of_person' => 4,
            'number_of_rooms' => 6,
            'is_available' => true,
            'count' => 0
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>52,
            'type' => 'Single Room',
            'image' => Storage::url('Single Room1.jpg'),
            'description' => 'wireless Internet ,AC, TV ,Line ,Telephone ,Hairdryer ,Minibar',
            'price' => 200,
            'number_of_person' => 3,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,

        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>52,
            'type' => 'Twin Room',
            'image' => Storage::url('Twin Room.jpg'),
            'description' => 'Wireless Internet,Air Conditioning,TV,Telephone Line,Bed,Extra Fax,Hairdryer,DVD Player,Office',
            'price' => 300,
            'number_of_person' => 4,
            'number_of_rooms' => 95,
            'is_available' => true,
            'count' => 0,
        ]);
        DB::table('rooms')->insert([
            'hotel_id'=>52,
            'type' => 'Royal Suite',
            'image' => Storage::url('Royal Suite1.jpg'),
            'description' => 'Wireless Internet,conditioning,television,Telephone line,Extra bed,fax,Hair dryer,dvd player,kitchen,office,bar',
            'price' => 500,
            'number_of_person' => 7,
            'number_of_rooms' => 4,
            'is_available' => true,
            'count' => 0
        ]);
    }
}

