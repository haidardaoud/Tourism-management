<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Damascus
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Four Seasons Hotel',
            'Address' => ' G77R+JG9، Damascus,Syria',
            'description' => 'Four Seasons Hotel is a five stars hotel located on Shukri Al-Quwatli Street in New Damascus.The hotel has 297 guest rooms and suites that ranges across 11 different levels.The rooms amenities include modern bathroom, wireless internet access, hair dryer, satellite TV,dual-line telephone, DVD player, air conditioning, safe, non-smoking rooms and mini bar.The hotel also has two Italian and Aleppean restaurants, a cigar bar, a pool bar, a fitness center,a spa, a business center and an events hall and it offers valet parking, laundry,airport transportation, car renting, babysitting and translation and interpretation services.',
            'image_profile'=> Storage::url('image/Four Seasons Hotel.jpg'),
            'link' => 'www.fourseasons.com',
            'phone' => +963113391000,
            'stars' => 5,
            'number_of_room' => 297,
            'rate' => 4.6
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Beit Al-Mamlouka Hotel',
            'address' => ' G877+2FF، Al-Bakri Street, Damascus, Syria.',
            'description' => 'Beit Al-Mamlouka Hotel is a five stars hotel located in Bab Touma area in Damascus Old City.The hotel has 8 guest rooms and suites that ranges across 3 different levels.The rooms amenities include modern bathroom, wireless internet access, satellite TV,air conditioning,breakfast and mini bar.The hotel also has an events hall and it offers laundry and airport transportation services.',
            'image_profile' => Storage::url('image/Beit Al-Mamlouka Hotel6.jpg'),
            'link' => 'www.almamlouka.com',
            'phone' => +963115430445,
            'stars' => 5,
            'number_of_room' => 8,
            'rate' => 4.8
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Sheraton Hotel',
            'Address' => '4795 Beirut Road, Damascus, Syria G77M+MV4, Shukri Al-Quwatli, Damascus, Syria',
            'description' => 'Sheraton Hotel is a five stars hotel located in Umayyad Square in New Damascus.The hotel has 283 guest rooms and suites. The rooms amenities include modern bathroom,wireless internet access, hair dryer, satellite TV, dual-line telephone, air conditioning and mini bar.The hotel also has five restaurants, a café, a bar, a swimming pool, a fitness fenter, a beauty salon,a barber, a tennis court, a business center and an occasions hall and it offers valet parking,airport transportation and car renting services.',
            'image_profile' => Storage::url('image/Sheraton Hotel.jpg'),
            'link' => 'www.starwood.com',
            'phone' => +963113734630,
            'stars' => 5,
            'number_of_room' => 283,
            'rate' => 4.3
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Dama Rose Hotel',
            'Address' => 'G77M+MV4، Shukri Al-Quwatli, Damascus, Syria',
            'description' => 'Dama Rose Hotel is a five stars hotel located in Abou Roumaneh area in New Damascus.The hotel has 370 guest rooms and suites that ranges across 6 different levels.The rooms amenities include modern bathroom, wireless internet access, hair dryer,satellite TV, living room, kitchen, desk and mini bar. The hotel also has seven restaurants,a café, a bar, a swimming pool, a fitness fenter, a spa, a barber, a tennis court,a business center and an occasions hall and it offers tourism tours and car renting services.',
            'image_profile' => Storage::url('image/Dama Rose Hotel.jpg'),
            'link' => 'www.damarose.com',
            'phone' => +963112229200,
            'stars' => 5,
            'number_of_room' => 370,
            'rate' => 4.2
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Beit Al-Wali Hotel',
            'Address' => ' G867+JMJ، Bab Touma Main Road،Boulad, Damascus, Syria',
            'description' => 'Beit Al-Wali Hotel is a five stars hotel located in Bab Touma area in Damascus Old City.The hotel has 29 guest rooms and suites that ranges across 6 different levels.The rooms amenities include modern bathroom, wireless internet access,air conditioning, safe,satellite TV and mini bar. The hotel also has a restaurant, a café and an events hall and it offers laundry,airport transportation, tourism tours and car renting services.',
            'image_profile' =>Storage::url('image/Beit Al-Mamlouka Hotel.jpg'),
            'link' => 'www.beitalwali.com',
            'phone' => +963115436666,
            'stars' => 5,
            'number_of_room' => 29,
            'rate' => 4.8
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Bab Touma Hotel',
            'Address' => 'G868+4VF، Bab Tuma, Damascus, Syria',
            'description' => 'Bab Touma Hotel is a five stars hotel located in Bab Touma area in Damascus Old City.The hotel has 9 guest rooms and suites. The rooms amenities include modern bathroom,wireless internet access, breakfast, satellite TV, dual-line telephone, electronic balance,air conditioning, safe and mini bar.The hotel also offers valet parking, laundry and airport transportation services.',
            'image_profile' => Storage::url('image/Bab Touma Hotel.jpg'),
            'link' => 'www.babtoumahotel.com',
            'phone' => +963115442200,
            'stars' => 5,
            'number_of_room' => 9,
            'rate' => 5.0
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Fardoss Tower Hotel',
            'Address' => 'G78V+99F، Damascus, Syria',
            'description' => 'Fardoss Tower Hotel is a four stars hotel located in Fardoss Street in New Damascus.The hotel has 90 guest rooms and suites. The rooms amenities include modern bathroom,satellite TV and mini bar.',
            'image_profile' => Storage::url('image/Fardoss Towe Hotel.jpg'),
            'link' => 'www.fardosstower.com',
            'phone' => +963112232100,
            'stars' => 4,
            'number_of_room' => 90,
            'rate' => 3.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Beit Zaman Hotel',
            'Address' => 'G858+Q2R،Haret Al-Misk, Damascus, Syria',
            'description' => 'Beit Zaman Hotel is a five stars hotel located in Bab Touma area in Damascus Old City.The hotel has 28 guest rooms and suites that ranges across 6 different levels.The rooms amenities include modern bathroom, wireless internet access, hair dryer,satellite TV, air conditioning, safe and mini bar. The hotel also has a café,a terrace and a bar and it offers laundry, airport transportation and tourism tours services.',
            'image_profile' => Storage::url('image/Beit Zaman.jpg'),
            'link' => 'www.beit-zaman.com',
            'phone' => +963115435380,
            'stars' => 5,
            'number_of_room' => 28,
            'rate' => 4.4
        ]);
        DB::table('hotels')->insert([
            'city_id' => 1,
            'Name' => 'Blue Tower Hotel',
            'Address' => ' G7CR+45X, Al Hamra,  Damascus, Syria',
            'description' => 'Blue Tower Hotel is a four stars hotel located in Arnous area in New Damascus.The rooms amenities include modern bathroom, wireless internet access, hair dryer, satellite TV, desk,air conditioning, safe, fax and mini bar. The hotel also has two restaurants, a bar, a gift shop,a barber shop and a business center and it offers airport transportation and car renting services.',
            'image_profile' => Storage::url('image/Blue Towe Hotel1.jpg'),
            'link' => 'www.bluetowerhotel.com',
            'phone' => +963113340240,
            'stars' => 4,
            'number_of_room' => 59,
            'rate' => 3.5
        ]);
        //Tartous
        DB::table('hotels')->insert([
            'city_id' => 2,
            'Name' => 'Antradous Hotel',
            'Address' => 'VVPM+H7R، Thawra Street, Tartus, Syria',
            'description' => 'The InterContinental Hotel in Tartus is one of the most famous luxury hotels in the city,located just a few minutes from the city center.The hotel is characterized by its elegant and modern design, with stunning views of the Mediterranean Sea.The hotel has a large number of rooms and suites equipped with the latest comforts and entertainment facilities.The rooms include a flat-screen TV, free Wi-Fi, a minibar, a wardrobe, and a private bathroom with luxurious toiletries.The hotel features a variety of facilities for the comfort of guests, including a fitness center,a swimming pool, a sauna, a steam room, as well as meeting and conference facilities that can accommodate a large number of people.There is also a restaurant that serves delicious international and local cuisine.The InterContinental hotel is known for its excellent services and helpful and friendly staff,who make guests stay comfortable and enjoyable. The hotel is also located near many famous tourist attractions in Tartus,making it an ideal choice for travelers who want to enjoy a luxurious stay and explore the city at the same time.',
            'link' => 'www.antradoushotel.com',
            'image_profile' => Storage::url('image/Antradous hotel1.jpg'),
            'number_of_room' => 138,
            'phone' => '+96343322499',
            'stars' => 3,
            'rate' => 3.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 2,
            'Name' => 'Shahin Tower Hotel',
            'Address' => 'VVQH+FHX، Tartus, Syria',
            'description' => 'The Shahin Tower Hotel is a four-star hotel in the coastal city of Tartus, Syria.Shahin Tower is one of the tallest hotel towers in Tartus and boasts a magnificent view of the sea to the west and the city of Tartus from other directions.The hotel consists of 21 floors, 51 sea-view rooms, 48 modern-view rooms, 13 small suites, 5 large suites, and a presidential suite.',
            'link' => 'www.shahinhotels.com',
            'image_profile' => Storage::url('image/Shahin hotel.jpg'),
            'number_of_room' => 51,
            'phone' => '+96343329100',
            'stars' => 4,
            'rate' => 4.0

        ]);
        DB::table('hotels')->insert([
            'city_id' => 2,
            'Name' => 'Holiday Beach Hotel',
            'Address' => '2W62+CFQ،Lattakia-Tartous Highway, Tartus, M1, Syria',
            'description' => 'The Holiday Beach Hotel is a beachfront hotel located in Tartus,Syria. This hotel offers a variety of comfortable rooms and suites, all of which feature air conditioning, a flat-screen TV,a minibar, and a private bathroom with free toiletries. Some of the rooms also offer stunning views of the Mediterranean Sea.The hotel has an outdoor swimming pool, a fitness center, and a sauna.There is also a restaurant on site that serves both local and international cuisine.Free Wi-Fi is available throughout the property.The Holiday Beach Hotel is conveniently located near many local attractions, including the Tartus Marina,the Citadel of Tartus, and the historic Old Town of Tartus.It is also a great base for exploring the surrounding areas, such as the Crusader Castle of Krak des Chevaliersand the ancient city of Apamea.Overall, the Holiday Beach Hotel offers a comfortable and convenient stay in Tartus,with its beachfront location, modern amenities, and proximity to local attractions.',
            'link' => 'www.holidaybeachsyria.com',
            'image_profile' => Storage::url('image/Holiday Beach hotel.jpg'),
            'number_of_room' => 104,
            'phone' => '+96343631970',
            'stars' => 4,
            'rate' => 4.6

        ]);
        DB::table('hotels')->insert([
            'city_id' => 2,
            'Name' => 'Royal Inn Hotel',
            'Address' => ' VVMJ+R29، ROYAL INN, Al-Qadmus, Tartus, Syria',
            'description' => 'The Royal Inn Hotel in Tartus is located on the seaside Corniche of Tartus.It features 45 classic rooms and 10 Junior suites with a partial view of the sea.The hotel also has 10 Royal suites with a bedroom and living room directly overlooking the sea,as well as 10 Family suites with two bedrooms and a living room with a direct view of the sea.There is a café on the Corniche with an outdoor terrace, and a breakfast restaurant on the ground floor next to the reception that can accommodate up to 70 people. The hotel also has a restaurant and a banquet hall on the sixth floor that can accommodate up to 350 people for conferences, weddings, and other events.Other services provided by the hotel include airline ticket reservations, hotel reservations outside the province,taxi services within and outside the province, free parking, free internet, free facility security, 24/7 electricity,fire alarm and extinguishing systems, free concierge service, massage service, and mens and womens hairdressing salons.Pets and birds are not allowed in the hotel, and smoking hookahs in the rooms is prohibited for public safety reasons.',
            'link' => 'res@royalinn.org',
            'image_profile' => Storage::url('image/Royal inn hotel.jpg'),
            'number_of_room' => 65,
            'phone' => '+963998730730',
            'stars' => 4,
            'rate' => 4.1

        ]);
        DB::table('hotels')->insert([
            'city_id' => 2,
            'Name' => 'Al Saleh Hotel',
            'Address' => 'VVPJ+W23، Tartus, Syria',
            'description' => 'Al Saleh Hotel is a 3-star hotel located in the heart of Tartus, Syria.The hotel offers a variety of comfortable rooms and suites, all of which are equipped with air conditioning,a flat-screen TV, a minibar, and a private bathroom with a shower and free toiletries. Some rooms also feature a seating area.The hotel has a restaurant on site that serves local and international cuisine,as well as a coffee shop that offers a selection of snacks and beverages.Room service is also available for guests who prefer to dine in the privacy of their own rooms.Other amenities at Al Saleh Hotel include a 24-hour front desk, luggage storage, and free Wi-Fi throughout the property.The hotel also offers laundry and ironing services for an additional fee.Al Saleh Hotel is located within walking distance of many local attractions, including the Tartus Citadel, the Tartus Museum,and the Tartus Marina. The hotel is also a great base for exploring the surrounding areas,such as the Crusader Castle of Krak des Chevaliers and the ancient city of Apamea.Overall, Al Saleh Hotel offers comfortable accommodations and convenient amenities in the heart of Tartus,making it a great choice for travelers visiting the area.',
            'link' => 'https://www.facebook.com/profile.php?id=100063691644872&sk=about',
            'image_profile' => Storage::url('image/Al Saleh hotel.jpg'),
            'number_of_room' => 45,
            'phone' => '+963998921282',
            'stars' => 3,
            'rate' => 3.7
        ]);
        //Latakia
        DB::table('hotels')->insert([
            'city_id' => 3,
            'Name' => 'Afamia hotel',
            'Address' => '‪Blue Beach Road‬ latakia 680 syria',
            'description' => 'This beach hotel comprises a total of 246 guest rooms including 1, 2 and 3-bedroom suites with stunning views of the beach,as well as 14 beach cabins.It truly is an ideal destination for leisure and business travellers alike.Facilities on offer to guests at this air-conditioned establishment include a lobby area with a 24-hour reception and check-out service,a hotel safe, a currency exchange facility and lift access.There is a hairdressing salon, a cafe, a pub and a restaurant as well as conference facilities and WLAN Internet access.Guests can also take advantage of the room and laundry services and there is a car park and covered garage parking for those arriving by car',
            'image_profile' => Storage::url('image/Afamia hotel.jpg'),
            'link' => 'www.facebook.com/people/Afamia-Hotel-Resort-Latakia',
            'number_of_room' => 50,
            'phone' => +963112229152,
            'stars' => 3,
            'rate' => 4.0
        ]);
        DB::table('hotels')->insert([
            'city_id' => 3,
            'Name' => 'Al Samman Hotel',
            'Address' => 'GQGH+VX6,latakia, syria',
            'description' => 'The Hotel offers: desk front, restaurant, cafeteria, health center, business center,services of local and international calls, Fax, internet and conference room, laundry,housekeeping, room services, parking',
            'image_profile' => Storage::url('image/Al Samman hotel.jpg'),
            'link' => 'www.facebook.com/alsamman.hotel/?paipv=0&eav=AfZLUXEvFkwexk326QM-wyA1Xho19Dq_oX7Fm5SRURms-MrjjrvFTzMbvK5xr8gK5CA&_rdr',
            'number_of_room' => 126,
            'phone' => +96341214847,
            'stars' => 4,
            'rate' => 3.6
        ]);
        DB::table('hotels')->insert([
            'city_id' => 3,
            'Name' => 'La Mira Hotel',
            'Address' => 'Po Box, 473,latakia, syria',
            'description' => 'An excellent luxurious hotel located on the blue beach, featuring a distinctive beauty and a great location away from the hustle and bustle of the city. I have visited it several times,the latest of which was this visit now.The hotel is fully equipped with services, and I felt comfortable and peaceful during my stay.',
            'image_profile' => Storage::url('image/La Mira Hotel4.jpg'),
            'link' => 'lamiraresort@lamiraresort.com',
            'number_of_room' => 274,
            'phone' => +96341428736,
            'stars' => 5,
            'rate' => 3.6
        ]);
        DB::table('hotels')->insert([
            'city_id' => 3,
            'Name' => 'Golden Beach Hotel',
            'Address' => 'HPQR+QWH,latakia, syria',
            'description' => ' The hotel offers comfortable accommodation with a range of amenities to ensure a pleasant stay for its guests.The hotel features elegantly designed rooms and suites with modern furnishings and amenities such as air conditioning,flat-screen TVs, minibars, and free Wi-Fi.The hotel has several dining options, including a restaurant serving local and international cuisine,a coffee shop, and a bar offering a selection of drinks and cocktails.For those looking to relax and unwind, the hotel has an outdoor pool, a private beach area,and a spa and wellness center offering a range of treatments and massages.Other facilities include a fitness center, sauna, and a children playground.',
            'image_profile' => Storage::url('image/Golden Beach hotel.jpg'),
            'link' => 'www.goldenbeach.sy/',
            'number_of_room' => 98,
            'phone' => +963960900034,
            'stars' => 5,
            'rate' => 4.4
        ]);
        //Homs
        DB::table('hotels')->insert([
            'city_id' => 4,
            'Name' => 'Safir Hotel',
            'Address' => ' PPF2+M7C،Ragheb Al-Jamali Street, Homs, P.O. Box 1746, Syria',
            'description' => 'It is a hotel located in the city of Homs in Syria, characterized by its central location in the middle of the city.The hotel consists of 50 rooms and suites equipped with all modern amenities,and features a restaurant that serves Syrian and international cuisine, as well as a meeting and event hall.Ambassador Hotel is distinguished by its strategic location close to famous tourist attractions in Homs,such as the castle, the ancient baths, and traditional markets.The hotel is a suitable choice for tourists who want to explore the city of Homs and stay in a comfortable and convenient place at the same time.The hotels rooms are characterized by modern furnishings and a calm and comfortable atmosphere,and feature all modern amenities, including a flat-screen TV,free Wi-Fi, air conditioning, and a private bathroom equipped with necessary toiletries.The hotel also offers entertainment and relaxation facilities, including an indoor pool, a health club,and a sauna.',
            'image_profile' => Storage::url('image/Safir Hotel1.jpg'),
            'link' => 'www.safirhotels.com/en',
            'phone' => +963312112400,
            'stars' => 4,
            'number_of_room' => 50,
            'rate' => 4.0
        ]);
        DB::table('hotels')->insert([
            'city_id' => 4,
            'Name' => 'Beit Zaid Hotel',
            'Address' => 'Homs-Damascus Road, Syria',
            'description' => 'It is a boutique hotel located in the city of Homs in Syria.The hotel is characterized by its elegant traditional design, warm and friendly atmosphere,and the charm of the ancient Ottoman buildings.Beit Zaid Hotel consists of 13 rooms equipped with all modern amenities.The rooms feature luxurious furnishings and elegant decor.The rooms are equipped with air conditioning, free Wi-Fi, a flat-screen TV, and a private bathroom with all necessary amenities.The hotel offers a delicious and hearty breakfast in a warm and friendly atmosphere.It is located in the heart of the old city, where guests can explore traditional markets and famous tourist attractions in Homs.The hotel offers many services to guests, including 24-hour room service,airport shuttle service, car rental service, and other services that make guestsstay more comfortable and luxurious.',
            'image_profile' => Storage::url('image/Beit Zaid Hotel.jpg'),
            'link' => 'm.facebook.com/story.php?story_fbid=472530743318294&id=121044248466947&mibextid=Nif5oz',
            'phone' => +963932369444,
            'stars' => 4,
            'number_of_room' => 13,
            'rate' => 4.2
        ]);
        //Aleppo
        DB::table('hotels')->insert([
            'city_id' => 5,
            'Name' => 'Baron Hotel',
            'Address' => 'Baron Street, Aleppo, Syria',
            'description' => 'The Baron Hotel was built in two floors and contained 31 bedrooms and two bathrooms between theyears of 1906 and 1911. Then, the Armenian Mamlouk brothers added a third floor in 1942,which included 17 rooms, each with its own bathroom.The hotel welcomed many celebrities and events, and military leaders during both World WarI and II used it to plan their strategies. Conferences were held in the hotel,and thinkers and leaders used its corners for contemplation. The hotels halls resounded with the songsof famous male and female singers, and kings, queens, princes,and nobles of Europe celebrated and danced there.',
            'image_profile' => Storage::url('image/Baron Hotel.jpg'),
            'link' => 'www.facebook.com/p/%D9%81%D9%86%D8%AF%D9%82-%D8%A8%D8%A7%D8%B1%D9%88%D9%86-%D8%AD%D9%84%D8%A8-Hotel-Baron-Aleppo-100064856956178/',
            'phone' => +963932369444,
            'stars' => 3,
            'number_of_room' => 17,
            'rate' => 4.3
        ]);
        DB::table('hotels')->insert([
            'city_id' => 5,
            'Name' => 'Palace Hotel',
            'Address' => ' 644X+V9V,"Al-Manashia, Aleppo, Aleppo, Syria',
            'description' => 'It is a luxurious hotel located in the heart of the old city of Aleppo in Syria.The hotel is characterized by its excellent location next to the famous Aleppo Castle and has 33 luxurious rooms and suites equipped with all modern amenities.The hotel, which dates back to the 19th century, has been beautifully and luxuriously renovated,and features traditional Armenian architecture.The hotel has a restaurant that serves Syrian and international cuisine, a fitness and spa center,and a meeting and event hall.Palace Hotel Aleppo is one of the most luxurious hotels in the city and is distinguished by its strategic location close to many of Aleppo tourist attractions, such as the castle,the historic market, and the ancient baths. The hotel is an ideal choice for tourists and business,travelers who want to stay in a luxurious and comfortable place in the heart of the old city.',
            'image_profile' => Storage::url('image/Palace Hotel.jpg'),
            'link' => 'www.facebook.com/AleppoPalaceHotel',
            'phone' => +963212115955,
            'stars' => 5,
            'number_of_room' => 33,
            'rate' => 4.0
        ]);

        DB::table('hotels')->insert([
            'city_id' => 5,
            'Name' => 'Al Shahba Hotel',
            'Address' => ' 643J+3JG، "Al-Manashia, Aleppo, Syriaا',
            'description' => 'It is a hotel located in the city of Aleppo in Syria,characterized by its modern design and central location in the heart of the city.The hotel consists of 100 rooms and suites equipped with all modern amenities,and features a restaurant that serves Syrian and international cuisine,as well as a fitness and spa center.Al Shahba Hotel is distinguished by its strategic location close to famous tourist attractions in Aleppo,such as the castle, the ancient baths, museums, and traditional markets.The hotel is a suitable choice for tourists who want to explore the city of Aleppo and stay in a comfortable and modern placeat the same time. The hotel offers free Wi-Fi and private parking, as well as 24-hour room service.Guests can enjoy magnificent views of the city from their rooms,and the hotel also provides meeting rooms and facilities for business travelers.Al Shahba Hotel is a popular choice for travelers to Aleppo,and it is recommended to book in advance to ensure a suitable stay.',
            'image_profile' => Storage::url('image/Al Shahba Hotel.jpg'),
            'link' => 'www.shahbaaleppo.com',
            'phone' => +963930300855,
            'stars' => 4,
            'number_of_room' => 100,
            'rate' => 4.3
        ]);
        DB::table('hotels')->insert([
            'city_id' => 5,
            'Name' => 'Beit Salahieh Hotel',
            'Address' => 'Al Mustadamia Stree Opposite Aleppo Citadel, Aleppo,Syria',
            'description' => 'The hotel was built in 1814 and was inhabited by the family of Hajj Abdelqader Salahi from 1860to 1950. After that period, it was turned into a small exemplary school for a short period until it was converted into a tourist hotel named Diwan Rasmi. In 2007, its ownership was regained by the Sham Hotels company, which restored the family name to it, and it became the Salahia House Hotel.The hotel continued to operate until extensive renovation work began, which lasted for about 18 months.',
            'image_profile' => Storage::url('image/Beit Salahia Hotel5.jpg'),
            'link' => 'www.tripadvisor.com.eg/Hotel_Review-g295416-d1009758-Reviews-Beit_Salahieh_Hotel-Aleppo_Aleppo_Governorate.html',
            'phone' => +963571270707,
            'stars' => 5,
            'number_of_room' => 42,
            'rate' => 4.5
        ]);
        //Emirate of Abu Dhabi
        DB::table('hotels')->insert([
            'city_id' => 6,
            'Name' => 'The WB Abu Dhabi,Curio Collection By Hilton',
            'Address' => 'Yas Island, Abu Dhabi, United Arab Emirates',
            'description' => 'The WB Abu Dhabi, Curio Collection By Hilton in Abu Dhabi,featuring an outdoor swimming pool, a fitness centre, a garden and a terrace.Among the facilities of this property are a restaurant, room service and a 24-hour front desk,along with free WiFi throughout the property.The property offers an ATM machine Concierge services and currency exchange for guests.This hotel will provide guests with air-conditioned rooms with a desk, a coffee machine,a safety deposit box, a flat-screen TV and a private bathroom with a bidet.Every room is equipped with a kettle, while some rooms also have a balcony and others also feature pool views.Rooms at The WB Hotel include Abu Dhabi, Curio Collection By Hilton with bed linen and towels.A buffet or American breakfast is served at the property.The 5-star The WB Abu Dhabi, Curio Collection By Hilton includes a hammer and children playground.Popular points of interest near the hotel include Yas Water world, Yas Formula 1 Marina Circuit and Yas Mall.The nearest airport is Abu Dhabi International Airport, 10 km from The WB Abu Dhabi, Curio Collection By Hilton Hotel.Couples particularly liked the location, rating it 9.5 for a two-person trip.',
            'image_profile' => Storage::url('image/The WB Abu Dhabi,Curio Collection By Hilton1.jpg'),
            'link' => 'www.hilton.com/en/hotels/auhwbqq-the-wb-abu-dhabi-curio-collection-by-hilton',
            'phone' => +97126560000,
            'stars' => 5,
            'number_of_room' => 156,
            'rate' => 4.2
        ]);
        DB::table('hotels')->insert([
            'city_id' => 6,
            'Name' => 'Four Seasons Hotel Abu Dhabi on Al Maryah Island',
            'Address' => 'Four Seasons Hotel Abu Dhabi is located on Al Maryah Island',
            'description' => 'Located on Al Maryah Island, Four Seasons Hotel Abu Dhabi features sweeping views of the city skyline and the shimmering waves of the Arabian Gulf.It offers a swimming pool with panoramic views of the skyline and water.It is located right outside the spa and provides a quiet and relaxing place from day to night.Eclipse Terrace Lounge, guests can enjoy free WiFi throughout the property.Four Seasons Hotel Abu Dhabi features 200 rooms and suites, each bright and airy,and all with views of the water. The contemporary interiors feature a residential style and include a wonderful Four Seasons bed,a luxurious sofa to relax in, an oval-shaped desk that doubles as a dining table, and a bathroom Spa styled.Four Seasons Hotel Abu Dhabi features 6 creative restaurants and lounges such as Butcher & Still Steakhouse,Café Milano Restaurant and Zsa Zsa Cocktail Bar, all with spacious outdoor terraces facing the water,and most of them offering private dining rooms.The Pearl Spa & Wellness at Four Seasons Hotel Abu Dhabi offers 8 spacious treatment spa suites - including one exclusive suite for couples.Four Seasons Hotel Abu Dhabi is directly connected to the Galleria Mall through air-conditioned corridors, and is only 800 meters from Abu Dhabi Shopping Mall. Four Seasons Hotel Abu Dhabi is located on Al Maryah Island, 3.8 km from Al Wahda Mall and 4 km from Qasr Al Hosn. The nearest airport is Abu Dhabi International Airport, 27 km from the property. Free private parking is available on site, as well as free valet parking.',
            'image_profile' => Storage::url('image/Four Seasons Hotel Abu Dhabi on Al Maryah Island1.jpg'),
            'link' => 'www.fourseasons.com/abudhabi/',
            'phone' => +97123332222,
            'stars' => 5,
            'number_of_room' => 238,
            'rate' => 4.1
        ]);
        DB::table('hotels')->insert([
            'city_id' => 6,
            'Name' => 'The St. Regis Saadiyat Island Resort, Abu Dhabi',
            'Address' => 'Saadiyat Island, Saadiyat Island, Abu Dhabi, United Arab Emirates',
            'description' => 'This 5-star resort offers direct access to its private beach on Saadiyat Island,as well as free Wi-Fi and rooms with a private balcony. It features a spa center and an indoor pool.Free parking is available.The spacious rooms at The St. Regis Saadiyat feature Mediterranean-style décor, beds with luxurious duvets and pillows, a TV and an iPod docking station.The private bathroom includes a double sink, free-standing bathtub, shower and Rémede toiletries.The St. Regis Saadiyat Island Resort, Abu Dhabi features 5 swimming pools, including a 25-metre indoor lap pool,and the Iridium Spa has 12 treatment rooms.Guests can play a game of tennis or explore the boutique shops in the shopping district.The Sandcastle Club offers indoor and outdoor activities for children.There are 6 restaurants and bars serving a variety of cuisines including modern Greek, Southeast Asian and Mediterranean dishes',
            'image_profile' => Storage::url('image/The St. Regis Saadiyat Island Resort, Abu Dhabi1.jpg'),
            'link' => 'www.marriott.com/hotels/travel/auhxr-the-st-regis-saadiyat-island-resort-abu-dhabi/',
            'phone' => +97124988888,
            'stars' => 5,
            'number_of_room' => 376,
            'rate' => 4.1
        ]);
        DB::table('hotels')->insert([
            'city_id' => 6,
            'Name' => 'InterContinental Residences Abu Dhabi, an IHG Hotel',
            'Address' => 'Nation Towers, Corniche Road, Abu Dhabi, United Arab Emirates.',
            'description' => 'Set in Abu Dhabi, 800 meters from Bayshore Beach Club, InterContinental Residences Abu Dhabi,an IHG Hotel offers accommodation with an outdoor swimming pool, free private parking, a fitness center and a garden.This 5-star hotel has a bar. The accommodation provides room service, a concierge service and currency exchange for guests.The rooms in the hotel are fitted with a kettle. Some rooms at "InterContinental Residences Abu Dhabi, an IHG Hotel" have a balcony,and every room includes a coffee machine. Bed linen and towels are provided in the rooms at the property.A buffet, continental or full Irish/English breakfast is served each morning at the property.InterContinental Residences Abu Dhabi, an IHG Hotel provides guests with a restaurant serving Italian,pizza and local cuisine. Vegetarian and vegan options can also be requested. Animal and dairy-free foods.',
            'image_profile' => Storage::url('image/InterContinental Residences Abu Dhabi, an IHG Hotel4.jpg'),
            'link' => 'www.ihg.com/intercontinental/hotels/gb/en/abu-dhabi/auhir/hoteldetail',
            'phone' => +97126666888,
            'stars' => 5,
            'number_of_room' => 184,
            'rate' => 4.9
        ]);
        //Emirate of Dubai
        DB::table('hotels')->insert([
            'city_id' => 7,
            'Name' => 'Taj Exotica Resort & Spa, The Palm, Dubai ',
            'Address' => 'The Palm Jumeirah, Crescent East, Dubai, United Arab Emirates.',
            'description' => 'Set in Dubai, Taj Exotica Resort & Spa, The Palm, Dubai offers accommodation with a restaurant,free private parking, an outdoor swimming pool and a fitness centre.Among the various facilities of this property are a bar, a private beach area and a tennis court.A 24-hour front desk, room service and currency exchange are available for guests.All rooms at the resort have a balcony and a sofa bed. Each room is equipped with a private bathroom,a safety deposit box, and free WiFi. Some rooms have a terrace, while some have sea views.Guest rooms include a minibar for guests.The hotel has 7 distinct restaurants, bars and lounges serving international, British, Indian and Middle Eastern cuisines.This 5-star property features a sauna and a children s playground. You can play table tennis at Taj Exotica Resort & Spa,The Palm, Dubai, and car hire is available.There is a kids club and guests can make use of the business centre.',
            'image_profile' => Storage::url('image/Taj Exotica Resort & Spa,The Palm,Dubai'),
            'link' => 'www.tajhotels.com/en-in/taj/taj-exotica-resort-and-spa-dubai/',
            'phone' => +97142754444,
            'stars' => 5,
            'number_of_room' => 244,
            'rate' => 4.1
        ]);
        DB::table('hotels')->insert([
            'city_id' => 7,
            'Name' => 'Caesars Palace Dubai',
            'Address' => 'Bluewaters Island, Dubai, United Arab Emirates.',
            'description' => 'Conveniently located close to major business and leisure locations, the property offers island accommodations for both domestic and international travelers.Caesars Palace Dubai also offers a retreat from the ordinary, where adults can enjoy unforgettable memories in an upscale and casual setting. relax.Guests can take advantage of everything the property has to offer,from relaxing at the property s well-equipped Qua Spa to enjoying lively entertainment and enjoying a wide range of al fresco dining experiences by world-renowned chefs.Caesars Palace Dubai offers a luxurious and ultra-comfortable atmosphere in its elegant and modern guest rooms and suites.This beachfront resort is located on the vibrant Bluewaters Island and features stunning views of the stunning open sea.The property offers 479 luxurious rooms and suites, as well as a 500-mile private beach meters, where guests can wake up to the sounds of the waves,and when they feel hungry, they can enjoy gastronomy in its finest forms in the 12 exquisite and distinctive restaurants, bars and lounges,and they can also renew their energy through bespoke treatments at the property’s award-winning spa Qua Spa The calm atmosphere,Caesars Palace Dubai ensures that guests will enjoy a special and memorable stay through the resort s luxurious atmosphere.',
            'image_profile' => Storage::url('image/Caesars Palace Dubai3.jpg'),
            'link' => 'www.caesars.com/dubai.',
            'phone' => +97145566666,
            'stars' => 5,
            'number_of_room' => 194,
            'rate' => 4.0
        ]);
        DB::table('hotels')->insert([
            'city_id' => 7,
            'Name' => 'The Dubai EDITION',
            'Address' => 'Jumeirah Beach Road, Dubai, United Arab Emirates.',
            'description' => 'Located in Dubai, 700 meters from The Dubai Fountain, THE DUBAI EDITION provides accommodation with free bike access, free private parking,an outdoor swimming pool and a fitness centre. Each accommodation unit at the 5-star hotel features views of the city.Guests can enjoy With access to a restaurant and bar, the property is less than 1 km from Dubai Mall and within 600 meters from the city centre.The hotel will provide guests with air-conditioned rooms equipped with a desk, coffee maker, refrigerator, minibar, safety deposit box, TV and balcony. In addition to a private bathroom with a bidet, each room at The Dubai EDITION includes bed linen and towels.The property serves a continental, vegetarian or vegan breakfast daily.',
            'image_profile' => Storage::url('image/The Dubai EDITION.jpg'),
            'link' => 'www.editionhotels.com/dubai/.',
            'phone' => +97145128000,
            'stars' => 5,
            'number_of_room' => 198,
            'rate' => 4.0
        ]);
        DB::table('hotels')->insert([
            'city_id' => 7,
            'Name' => 'Sofitel Dubai The Obelisk',
            'Address' => 'Sheikh Rashid Road, Wafi City, Dubai, United Arab Emirates.',
            'description' => 'Set in Dubai, 6 km from Dubai Grand Mosque, Sofitel Dubai The Obelisk offers accommodation with an outdoor swimming pool,free private parking, a fitness center and a terrace. This 5-star hotel features free WiFi, a kids club and room service.The property has a concierge service, luggage storage area and currency exchange for guests.                                                                                                                                                                                                                                                                                                                     The rooms at the hotel are air-conditioned and come with a seating area, a flat-screen TV with cable channels, a safety deposit box, and a private bathroom with a bidet, a hairdryer and free toiletries. The rooms also include a coffee machine, while some rooms have a kitchen with a fridge, an oven, and a microwave. Bed linen and towels are provided in each room at Sofitel Dubai The Obelisk.Breakfast is served every morning, and it includes buffet, continental and à la carte breakfast options.The property also has a restaurant that serves British, French and Japanese cuisine.Vegetarian, vegan and dairy-free options can also be requested.',
            'image_profile' => Storage::url('image/Sofitel Dubai The Obelisk1.jpg'),
            'link' => 'www.sofitel-dubai-theobelisk.com.',
            'phone' => +97142814000,
            'stars' => 5,
            'number_of_room' => 595,
            'rate' => 4.0
        ]);
        DB::table('hotels')->insert([
            'city_id' => 7,
            'Name' => 'Address Sky View',
            'Address' => 'Sheikh Mohammed bin Rashid Blvd, Downtown Dubai, Dubai, United Arab Emirates.',
            'description' => 'Attractively located in Downtown Dubai, Address Sky View offers air-conditioned rooms with free WiFi,free private parking and room service. This 5-star hotel features an ATM and a concierge service.The property offers a seasonal outdoor pool, a fitness centre, a sauna and access Free use of bicycles.At the hotel, rooms come with a desk, a flat-screen TV, a private bathroom, bed linen and towels.Rooms include a safety deposit box, while some rooms have a balcony while others also feature city views.All rooms will provide guests with a wardrobe and a kettle.Breakfast is served every morning, and it includes buffet, continental, and à la carte breakfast options.Address Sky View provides guests with a restaurant that serves international cuisine. Vegetarian, Halal, and gluten-free options can also be requested.The property features a sun terrace.',
            'image_profile' => Storage::url('image/Address Sky View.jpg'),
            'link' => 'www.addresshotels.com/en/hotels/address-sky-view',
            'phone' => +97148738888,
            'stars' => 5,
            'number_of_room' => 169,
            'rate' => 4.0
        ]);
        //Emirate of Sharjah
        DB::table('hotels')->insert([
            'city_id' => 8,
            'Name' => 'The Act Hotel Sharjah',
            'Address' => 'Al Khan Street, Al Khan Beach, Sharjah, United Arab Emirates.',
            'description' => 'Located in Sharjah, less than 1 km from Al Noor Island Beach, "The Act Hotel Sharjah" provides accommodation with free private parking,a fitness centre, a terrace and a restaurant. This 5-star hotel offers room service and a business centre.The property has free Wi-Fi in all areas, a kids club, airport transfers and a 24-hour front desk.Each room at this hotel is air-conditioned and comes with a seating area, a flat-screen TV with satellite channels,a safety deposit box, as well as a private bathroom with a hairdryer, free toiletries and a bidet.Some units at "The Act Hotel Sharjah" feature city views The rooms are fitted with a coffee machine,while the rooms at the property include bed linen and towels.',
            'image_profile' => Storage::url('image/The Act Hotel Sharjah.jpg'),
            'link' => 'www.theacthotel.com',
            'phone' => +97145566666,
            'stars' => 5,
            'number_of_room' => 180,
            'rate' => 3.4
        ]);
        DB::table('hotels')->insert([
            'city_id' => 8,
            'Name' => 'Sheraton Sharjah Resort & Spa',
            'Address' => 'Al Muntazah Street, Sharjah, United Arab Emirates, Sharjah, United Arab Emirates -',
            'description' => '
            Located in Sharjah in the Sharjah Emirate region, 10 km from Ruba Al Sharjah Aquarium and 12 km from Sahara Centre,Sheraton Sharjah Resort & Spa features a private beach area. This property also includes an outdoor pool,and is near attractions such as Museum of Islamic Civilization. There is a terrace and guests can make use of free WiFi and free private parking.At the resort all rooms come with a desk, a flat-screen TV and a private bathroom. Rooms also have air conditioning,and some offer a balcony. Guest rooms include a wardrobe.Breakfast is available each morning, and includes continental and American options. There are also several lunch and dining options available at Arjwan Restaurant which serves Middle Eastern food,Marasea Restaurant which serves seafood and Al Qubtan Restaurant which serves international cuisine.The pool bar serves snacks around the pool all day long.Sheraton Sharjah Resort & Spa features the Shine Spa where guests can enjoy some relaxing time in the hot tub,steam room or sauna before opting for a treatment in the spa rooms.Gym enthusiasts will find a fitness center, table tennis and billiards at the 5-star resort.Guests can make use of the business center for work or take a sightseeing trip organized by the tour desk. The reception can provide tips on the area to help guests plan their day.',
            'image_profile' => Storage::url('image/Sheraton Sharjah Resort & Spa.jpg'),
            'link' => 'www.marriott.com/hotels/travel/shjsi-sheraton-sharjah-beach-resort-and-spa/',
            'phone' => +97165630000,
            'stars' => 5,
            'number_of_room' => 239,
            'rate' => 3.1
        ]);
        DB::table('hotels')->insert([
            'city_id' => 8,
            'Name' => 'DoubleTree by Hilton Sharjah Waterfront Hotel And Residences',
            'Address' => 'Al Majaz 3, Buhaira Corniche Road, Sharjah, United Arab Emirates.',
            'description' => 'DoubleTree by Hilton Sharjah Waterfront Hotel And Residences.It is an air-conditioned accommodation offering free Wi-Fi, a restaurant and a terrace.All units come with a seating area and a flat-screen TV with satellite channels, as well as a private bathroom with free toiletries,shower and bath. Some units also have a kitchen, fitted with a dishwasher, oven and fridge.Guests can enjoy a Full English/Irish, continental or buffet breakfast at the property.The aparthotel offers 4-star accommodation with an indoor pool, fitness center and sauna.A business center and free private parking are available, as well as a 24-hour front desk.',
            'image_profile' => Storage::url('image/DoubleTree by Hilton Sharjah Waterfront Hotel And Residences.jpg'),
            'link' => 'www.hilton.com/en/hotels/shjdtdi-doubletree-sharjah-waterfront',
            'phone' => +97165192222,
            'stars' => 5,
            'number_of_room' => 254,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 8,
            'Name' => 'Occidental Sharjah Grand',
            'Address' => 'Al Meena Street, Al Khan Beach, Sharjah, United Arab Emirates',
            'description' => 'Overlooking the Arabian Gulf, this 4-star beach-side property offers a tennis court,massage treatments and a large outdoor pool with a waterslide.Rooms at Occidental Sharjah Grand feature a balcony with stunning views of the sea or Sharjah.The accommodation has satellite TV and a minibar.Luxurious amenities offered at Occidental Sharjah Grand include a fitness center and a hot tub.The hotel also has a children s playground.Meena Restaurant serves breakfast, lunch and dinner in buffet and à la carte style. Guests can enjoy live music and theme nights.The cozy La Terrace Café features refreshing snacks and fresh fruit cocktails.The front desk staff is available 24 hours a day and can provide information about the local area and car rental service at the hotel.Sharjah Grand Hotel is only 20 minutes away from Sharjah and Dubai International Airport.',
            'image_profile' => Storage::url('image/Occidental Sharjah Grand hotel.jpg'),
            'link' => 'www.barcelo.com/en-gb/occidental-hotels/hotels/united-arab-emirates/sharjah/occidental-sharjah-grand/',
            'phone' => +97165980000,
            'stars' => 5,
            'number_of_room' => 220,
            'rate' => 4.1
        ]);
        //Emirate of Ajman
        DB::table('hotels')->insert([
            'city_id' => 9,
            'Name' => 'Ajman Saray, a Luxury Collection Resort',
            'Address' => 'Sheikh Humaid Bin Rashid Al Nuaimi Street, Ajman',
            'description' => 'Ajman Saray Resort is located on the beach side along the pristine coastline of Ajman.Guests looking to improve their health will have access to a fully equipped modern fitness center,as well as plenty of indulgent experiences at Zehen Spa, a natural, serene and nurturing environment with a deep focus on the concept of energy balancing and healing philosophy. health.Ajman Saray includes 205 suites and spacious guestrooms with stunning views of the Arabian Gulf and the creek.Each unit offers a balcony, a flat-screen TV and an iPod docking station.The suite includes a living room with a dining table, while the bathroom has a bathtub and shower.The property has 6 restaurants and bar areas, each offering signature cuisine from seafood, Mediterranean,Middle Eastern, Indian and BBQ flavours. The resort also has a beach bar and an elegant lounge.The property is a short drive from Sharjah International Airport. Free private parking is available on site.',
            'image_profile' => Storage::url('image/Ajman Saray, a Luxury Collection Resort2.jpg'),
            'link' => 'www.marriott.com/hotels/travel/shjlc-ajman-saray-a-luxury-collection-resort-ajman/',
            'phone' => +97167142222,
            'stars' => 5,
            'number_of_room' => 205,
            'rate' => 3.1
        ]);
        DB::table('hotels')->insert([
            'city_id' => 9,
            'Name' => 'Fairmont Ajman',
            'Address' => 'Sheikh Humaid Bin Rashid Al Nuaimi Street, Ajman',
            'description' => 'This 5-star resort is located in Ajman, along 200 meters of sandy beach sloping into the Arabian Gulf.Fairmont Ajman features an expansive infinity pool and a spa with a range of signature treatments.Guests can enjoy free WiFi in the hotel and rooms as well.All guest rooms and suites feature far-reaching sea views, luxurious furnishings with plush bedding and modern in-room technology.The luxurious bathroom includes a bathtub and separate shower.Fairmont Ajman includes 7 restaurants and lounges. The Turkish Restaurant serves Turkish favorites in a traditional Ottoman-style setting.The Spectrum also features open show kitchens and international cuisine.Guests can enjoy shisha in the outdoor lounge that overlooks the sea.Fairmont Ajman is 31 km from Dubai International Airport, a 5-minute walk from the Corniche Road,and a 30-minute drive from the neighboring emirate of Dubai, famous for its world-class attractions.',
            'image_profile' => Storage::url('image/Fairmont Ajman.jpg'),
            'link' => 'www.fairmont.com/ajman/',
            'phone' => +97167015757,
            'stars' => 5,
            'number_of_room' => 252,
            'rate' => 3.8
        ]);
        DB::table('hotels')->insert([
            'city_id' => 9,
            'Name' => 'Radisson Blu Ajman',
            'Address' => 'Al Ittihad Street - E11 - Ajman - United Arab Emirates',
            'description' => 'Centrally located, the new Radisson Blu Ajman offers stylish interiors, a wide range of restaurants and bars, and an outdoor swimming pool. Guests can also enjoy free high-speed WiFi throughout the property.All 148 rooms and suites are elegantly decorated and are equipped with a flat-screen TV with satellite channels and an Apple multimedia device. Guests can also enjoy a cup of tea while looking out at the pool or the city. Rooms have a private bathroom. Free toiletries, slippers and a hair dryer are provided for guests comfort.Guests can find a signature restaurant among the property s 6 restaurants and bars: Filini serves simply cooked Italian food made with carefully selected ingredients.Guests can enjoy relaxation and rejuvenation in the elegant spa facilities, which include private massage rooms and a temperature-controlled swimming pool.4 meeting rooms and a grand ballroom are fully equipped with elegant and modern solutions to arrange successful and memorable meetings, weddings and events.Radisson Blu is 10 km from Ajman Corniche, 2 km from City Center Ajman Mall and 3.5 km from Thumbay Medicity Hospital, which is equipped with support and full medical facilities. Sharjah International Airport is 10 km from the property. Free valet parking is available at the site.',
            'image_profile' => Storage::url('image/Radisson Blu Ajman.jpg'),
            'link' => 'ajman@radissonblu.com',
            'phone' => +97167070700,
            'stars' => 5,
            'number_of_room' => 252,
            'rate' => 4.6
        ]);

        //London
        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Savoy Hotel',
            'Address' => 'Strand, London WC2R 0EZ، the United Kingdom',
            'description' => 'The Savoy Hotel is a luxurious and iconic hotel located in the heart of London, England.It is situated on the north bank of the River Thames, in the neighborhood of Covent Garden,and has been a landmark of the city since it first opened its doors in 1889.The hotel is renowned for its elegant Art Deco style and impeccable service, and has hosted many famous guests over the years, including royalty, celebrities, and political leaders.Its luxurious rooms and suites are decorated with exquisite furnishings and feature modern amenities such as flat-screen TVs, high-speed internet, and marble bathrooms.',
            'image_profile' => Storage::url('image/The Savoy Hotel.jpg'),
            'link' => 'www.thesavoylondon.com',
            'phone' => +442078364343,
            'stars' => 5,
            'number_of_room' => 267,
            'rate' => 4.3
        ]);
        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Ritz Hotel',
            'Address' => '150 Piccadilly,St.Jamess,London W1J9BR،the United Kingdom',
            'description' => 'The Ritz London is an iconic and luxurious hotel located in the heart of London, UK.It was opened in 1906 and has since become a symbol of elegance, sophistication, and glamour.The hotel is located in Piccadilly, one of the cities most prestigious and vibrant areas,and is within walking distance of many of London top attractions.The Ritz London is renowned for its opulent décor, with its grand public spaces featuring ornate chandeliers,marble floors, and sumptuous furnishings.The hotel has 136 luxurious rooms and suites,each individually decorated with antique furnishings and rich fabrics,and equipped with modern amenities such as flat-screen TVs, high-speed internet,and luxurious marble bathrooms.',
            'image_profile' => Storage::url('image/The Ritz hotel.jpg'),
            'link' => 'www.theritzlondon.com',
            'phone' => +442074938181,
            'stars' => 5,
            'number_of_room' => 136,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Dorchester Hotel',
            'Address' => '53 Park Ln,London W1K 1QA،the United Kingdom',
            'description' => 'The Dorchester hotel is a luxurious and iconic hotel located in the heart of London, UK.It was opened in 1931 and has since become a symbol of elegance, sophistication, and exclusivity.The hotel is situated in the upscale Mayfair neighborhood,known for its designer boutiques, art galleries, and fine dining restaurants.The Dorchester is renowned for its opulent and grand interior,with a blend of contemporary and classic design elements.The hotel has 250 luxurious rooms and suites, each individually designed with elegant furnishings and equipped with modern amenities, including flat-screen TVs, high-speed internet, and marble bathrooms.',
            'image_profile' => Storage::url('image/The Dochester.jpg'),
            'link' => 'www.dorchestercollection.com/en/london/the-dorchester/',
            'phone' => +442076298888,
            'stars' => 5,
            'number_of_room' => 250,
            'rate' => 4.6
        ]);

        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Claridges Hotel',
            'Address' => ' Brook Street, London W1K 4HR،the United Kingdom',
            'description' => 'Claridges hotel is a luxurious and historic hotel located in the heart of Mayfair,one of the most prestigious neighborhoods in London, UK.The hotel was first established in 1812, and has since become a symbol of timeless elegance, sophistication,and impeccable service.Claridges hotel is renowned for its Art Deco design, with luxurious furnishings, marble floors,and ornate chandeliers throughout the public areas.The hotel has 190 luxurious rooms and suites, each individually designed with elegant furnishings and equipped with modern amenities, including flat-screen TVs, high-speed internet, and marble bathrooms.',
            'image_profile' => Storage::url('image/The claridges hotel.jpg'),
            'link' => 'www.claridges.co.uk',
            'phone' => +442076298860,
            'stars' => 5,
            'number_of_room' => 190,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Langham Hotel',
            'Address' => '1C Portland Pl, London W1B 1JA،the United Kingdom',
            'description' => 'The Langham, London is a luxurious and historic hotel located in the heart of London, UK.It was opened in 1865 and has since become a symbol of timeless elegance, sophistication, and luxury.The hotel is situated in the upscale neighborhood of Marylebone, known for its designer boutiques,art galleries, and fine dining restaurants.The Langham, London is renowned for its elegant and grand Victorian interior,with a blend of contemporary and classic design elements.The hotel has 380 luxurious rooms and suites, each individually designed with elegant furnishings and equipped with modern amenities, including flat-screen TVs, high-speed internet, and marble bathrooms.',
            'image_profile' => Storage::url('image/The Langham London.jpg'),
            'link' => 'www.langhamhotels.com',
            'phone' => +442076361000,
            'stars' => 5,
            'number_of_room' => 380,
            'rate' => 4.6
        ]);
        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Connaught Hotel',
            'Address' => ' The Connaught, 16 Carlos Pl, London W1K 2AL،the United Kingdom',
            'description' => 'The Connaught is a luxurious and historic hotel located in the heart of Mayfair,one of the most prestigious neighborhoods in London, UK. The hotel was first established in 1815,and has since become a symbol of timeless elegance, sophistication, and luxury.The Connaught is renowned for its classic and elegant interior, with a blend of contemporary and traditional design elements.The hotel has 121 luxurious rooms and suites, each individually designed with elegant furnishings and equipped with modern amenities,including flat-screen TVs, high-speed internet, and marble bathrooms.',
            'image_profile' => Storage::url('image/The Connaught.jpg'),
            'link' => 'www.the-connaught.co.uk',
            'phone' => +442074997070,
            'stars' => 5,
            'number_of_room' => 121,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 10,
            'Name' => 'The Rosewood Hotel',
            'Address' => ' 252 High Holborn, London WC1V 7EN،the United Kingdom',
            'description' => 'The hotel was opened in 2013 and has since become a symbol of modern luxury and sophistication.The hotel is situated in the upscale neighborhood of Holborn, known for its designer boutiques,art galleries, and fine dining restaurants.Rosewood London is renowned for its contemporary and sophisticated interior, with a blend of contemporary and classic design elements. The hotel has 308 luxurious rooms and suites,each individually designed with elegant furnishings and equipped with modern amenities,including flat-screen TVs, high-speed internet, and marble bathrooms.',
            'image_profile' => Storage::url('image/The Rosewood Hotel.jpg'),
            'link' => 'www.the-connaught.co.uk',
            'phone' => +442077818888,
            'stars' => 5,
            'number_of_room' => 308,
            'rate' => 4.7
        ]);
        //Paris
        DB::table('hotels')->insert([
            'city_id' => 11,
            'Name' => 'The Four Seasons Hotel',
            'Address' => '31 Av. George V, 75008 Paris, Franca ',
            'description' => 'The Four Seasons Hotel George V in Paris is a luxurious five-star hotel located just off the Champs-Élysées.The hotel features elegant rooms and suites designed in a classic French style with modern amenities,including flat-screen TVs, iPod docking stations, and marble bathrooms.The hotel also boasts a Michelin-starred restaurant, Le George, which serves Mediterranean-inspired cuisine,as well as the three-Michelin-starred restaurant Le Cinq, which offers French haute cuisine.Guests can relax at the hotels spa, which features an indoor pool, a sauna, and a fitness center.The hotels prime location makes it an ideal choice for those who want to explore the cities top attractions,including the Eiffel Tower and the Arc de Triomphe, which are both within walking distance.',
            'image_profile' => Storage::url('image/The Four Seasons Hotel.jpg'),
            'link' => 'www.fourseasons.com/paris/?seo=google_local_par1_emea',
            'phone' => +33149527000,
            'stars' => 5,
            'number_of_room' => 244,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 11,
            'Name' => 'Hôtel de Crillon',
            'Address' => '10 Pl. de la Concorde, 75008 Paris, Franca ',
            'description' => 'Hôtel de Crillon is an iconic palace hotel located in the heart of Paris.The hotel features luxurious rooms and suites designed with elegance and attention to detail,where the finest details have been taken care of to give each room a unique character.The rooms feature comfortable beds, luxurious sitting areas, and a luxurious interior design with intricate details,as well as modern amenities such as flat-screen TVs and Bluetooth sound systems.The hotel boasts its two-Michelin-starred restaurant, LEcrin, which offers fine French cuisine witha luxurious interior design and a romantic atmosphere.The hotel also features a state-of-the-art health center and spa, as well as luxurious meeting and event rooms.Hôtel de Crillon is an ideal choice for those who want to stay in a luxurious palace hotel in the heart of Paris,as it is located near many famous landmarks such as the Arc de Triomphe and the Louvre Museum.',
            'image_profile' => Storage::url('image/Hôtel de Crillon.jpg'),
            'link' => 'www.rosewoodhotels.com/en/hotel-de-crillon',
            'phone' => +33144711500,
            'stars' => 5,
            'number_of_room' => 244,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 11,
            'Name' => 'Le Bristol Hotel',
            'Address' => '112 Rue du Faubourg Saint-Honoré, 75008 Paris, Franca ',
            'description' => 'Le Bristol Paris is an elegant and historic hotel located on the prestigious rue du Faubourg Saint-Honoré,just a short walk from the Champs-Élysées.The hotel features luxurious rooms and suites designed in a classic French style with modern amenities,including flat-screen TVs, iPod docking stations, and marble bathrooms.The hotels signature suites are some of the most opulent in Paris, with stunning views of the city.Le Bristol Paris is home to three-Michelin-starred restaurant Epicure, which serves French haute cuisine,as well as the one-Michelin-starred restaurant 114 Faubourg, which offers a more casual dining experience.Guests can also enjoy the hotels spa, which features an indoor pool, a sauna, and a fitness center.Le Bristol Paris is known for its impeccable service and attention to detail,making it a top choice for discerning travelers looking for a truly luxurious experience in the heart of Paris.',
            'image_profile' => Storage::url('image/Le Bristol Hotel.jpg'),
            'link' => 'www.oetkercollection.com/fr/hotels/le-bristol-paris/?utm_source=google&utm_medium=local&utm_campaign=lebristolparis',
            'phone' => +33153434300,
            'stars' => 5,
            'number_of_room' => 190,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 11,
            'Name' => 'Lutetia Hotel',
            'Address' => '45 Bd Raspail, 75006 Paris, Franca ',
            'description' => 'The Hotel Lutetia is a historic five-star hotel located in the heart of Saint-Germain-des-Prés,one of the most vibrant neighborhoods in Paris.The hotel has recently undergone a complete renovation, preserving the Art Nouveau and Art Deco elements that have madeit an iconic landmark since its opening in 1910.The hotel features luxurious rooms and suites designed in a contemporary style with modern amenities,including flat-screen TVs, complimentary Wi-Fi, and marble bathrooms.',
            'image_profile' => Storage::url('image/Lutetia Hotel.jpg'),
            'link' => 'www.hotellutetia.com/',
            'phone' => +33149544600,
            'stars' => 5,
            'number_of_room' => 184,
            'rate' => 4.7
        ]);
        DB::table('hotels')->insert([
            'city_id' => 11,
            'Name' => 'The Peninsula Hotel',
            'Address' => '19 Av. Kléber, 75116 Paris,Franca',
            'description' => ' The hotel is housed in a beautifully restored 19th-century building that once served as the headquartersof the French Ministry of Foreign Affairs.The hotel features opulent rooms and suites designed in a classic French style with contemporary touches,offering guests the ultimate in comfort and luxury.All rooms include modern amenities such as flat-screen TVs, Bluetooth audio systems,and marble bathrooms with separate rain showers and soaking tubs.The hotels rooftop restaurant, LOiseau Blanc,offers panoramic views of the Eiffel Tower and serves French cuisine.The hotel also features Le Lobby restaurant, which offers a chic and elegant dining experience,as well as a spa featuring an indoor pool, a fitness center, and a range of massages and treatments.',
            'image_profile' => Storage::url('image/The Peninsula Hotel.jpg'),
            'link' => 'www.peninsula.com/en/paris/5-star-luxury-hotel-16th-arrondissement',
            'phone' => +33158122888,
            'stars' => 5,
            'number_of_room' => 200,
            'rate' => 4.6
        ]);

    }
}
