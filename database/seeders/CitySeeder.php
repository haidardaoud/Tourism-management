<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Syria
        DB::table('cities')->insert([
            'country_id' => 1,
            'Name' => 'Damascus',
            'description' => 'It is one of the oldest cities in the world with an uninterrupted history of nearly eleven thousand years,and the oldest city-capital in the world.It became the capital of the region of Syria since the year 635.The city has been considered the administrative center of the Damascus Governorate since ancient times.Damascus was famous as a commercial city, where caravans went for rest or shopping.The city was one of the stops on the Silk Road, the sea route,the Levantine pilgrimage procession, and caravans heading to Persia or Asia Lesser, Egypt or Arabia.',
            'image' => Storage::url('image/Damascus.jpg')
        ]);
        DB::table('cities')->insert([
            'country_id' => 1,
            'Name' => 'Tartus',
            'description' => 'Tartous is a Syrian city on the Mediterranean coast,and it is the most important port in Syria.It is a historical Phoenician city that gained its name from the Latin “Antradus” (in Latin: Antaradus),and it is the center of the Tartous governorate.Arwad Island is located opposite it, which is a Syrian island.It was a maritime kingdom that extended its influence over most of the Syrian coast.The Mediterranean Sea. A major sea port in Syria is located in it.Many cultural and literary events, art festivals and theater are held in the city.In the summer,the activities of the Tartous Tourist Festival are held with a distinguished presence of Syrian and Arab artists,in addition to a tourism festival.',
            'image'=> Storage::url('image/tartous.jpg')

        ]);
        DB::table('cities')->insert([
            'country_id' => 1,
            'Name' => 'Latakia',
            'description' => 'It is located on the eastern coast of the Mediterranean Sea,within a marine peninsula, about 335 km northwest of the capital, Damascus.It is the countries first port on the Mediterranean Sea and the incubator for its largest ports,which gave it a unique commercial location and enriched it with many vital,industrial and commercial facilities.In addition, the city is the administrative center of Latakia Governorate.Also, the city is considered an important tourist center for its richness in archaeological sites,some of which date back to the Phoenician era,in addition to the moderate climate and the availability of tourism industry services.The area that the city currently occupies has been inhabited since the Stone Age,and has experienced a rare artistic,economic and cultural flourishing and emerged from the first alphabet Ugarit.It was also an important center in the Seleucid and Roman eras',
            'image'=> Storage::url('image/latakia.jpg')
        ]);
        DB::table('cities')->insert([
            'country_id' => 1,
            'Name' => 'Homs',
            'description' => 'Homs and its surroundings are considered an important tourist center for its richness in archaeological sites,in addition to the moderate climate and the availability of tourism industry services.The area that the city currently occupies has been inhabited by humans since the Stone Age,and was founded by the Seleucids in the fourth century BC.Under the rule of the Homsi dynasty,it was able to maintain its independence based on an alliance with the Roman Empire.It witnessed artistic, economic and cultural prosperity throughout the rule of the Homsi dynasty.The city lived through volatile stages, politically and economically, during its long history',
            'image'=> Storage::url('image/Homs.jpg')
        ]);
        DB::table('cities')->insert([
            'country_id' => 1,
            'Name' => 'Aleppo',
            'description' => 'The center of Aleppo Governorate, which is the largest Syrian governorate in terms of population,with an official population of more than 4.6 million (2004 estimates).It is also considered the economic capital of Syria.It is located in northwest Syria, 310 km (193 miles) from Damascus.It is also the largest city in the Levant, and it was the capital of the Amorite Kingdom of Yamhad,and several civilizations such as the Hittite, Aramaic, Assyrian,Persian, Hellenistic, Roman, Byzantine, and Islamic successively followed it.In the Abbasid era, Aleppo emerged as the capital of the Hamdanid state,which extended from Aleppo to the Euphrates island and Mosul.Aleppo is one of the oldest inhabited cities in the world, since the beginning of the sixth millennium BC',
            'image'=> Storage::url('image/Aleppo.jpg')
        ]);
//        //The UAE
        DB::table('cities')->insert([
            'country_id' => 2,
            'Name' => 'Emirate of Abu Dhabi',
            'description' =>'is the largest of the seven emirates that make up the UAE and is known for its impressive modern architecture, luxurious hotels, and cultural attractions.The city has a rich history that dates back to the Bronze Age, and it has been influenced by a variety of different cultures over the centuries, including Persian, Arab, and European.Today, Abu Dhabi is a thriving metropolis and a major center for business, finance, and tourism in the Middle East.Some of the citys top attractions include the Sheikh Zayed Grand Mosque,which is one of the largest mosques in the world and is known for its stunning architecture,as well as the Emirates Palace Hotel, which is a luxurious 7-star hotel that is renowned for its opulence and extravagance.Other notable landmarks in Abu Dhabi include the Corniche, a scenic waterfront promenade that is popular for walking and jogging,and the Abu Dhabi Falcon Hospital, which is a unique facility that offers visitors the opportunity to learn about and interact with these magnificent birds of prey.',
            'image'=> Storage::url('image/Emirate of Abu Dhabi.jpg')
        ]);
        DB::table('cities')->insert([
            'country_id' => 2,
            'Name' => 'Emirate of Dubai',
            'description' =>'Dubai is a vibrant and modern city located in the United Arab Emirates (UAE) on the southeastern coast of the Persian Gulf. It is known for its towering skyscrapers, luxurious shopping malls, and impressive modern architecture.Dubai is a global hub for trade, business, and tourism, and its economy is driven by industries such as finance, real estate, and tourism. The city has a diverse population, with people from all over the world living and working there.Some of the city s top attractions include the Burj Khalifa, the world s tallest building, the Dubai Mall, one of the largest shopping centers in the world, and the Palm Jumeirah, an artificial island in the shape of a palm tree that is home to some of the city s most exclusive resorts and hotels.Dubai is also known for its luxury hotels, fine dining restaurants, and world-class entertainment. The city is home to a range of cultural and sporting events throughout the year, including the Dubai World Cup, the Dubai International Film Festival, and the Dubai Shopping Festival.Overall, Dubai is a fascinating and cosmopolitan city that offers visitors a unique blend of modernity and tradition. Its stunning architecture, diverse cultural heritage, and luxurious amenities make it a popular destination for travelers from around the world.',
            'image'=> Storage::url('image/Emirate of Dhabi.jpg')
        ]);
        DB::table('cities')->insert([
            'country_id' => 2,
            'Name' => 'Emirate of Sharjah',
            'description' =>'The Emirate of Sharjah is one of the seven emirates that make up the United Arab Emirates (UAE),located on the eastern coast of the Arabian Peninsula. It is the third-largest emirate in the UAE,with an area of approximately 2,590 square kilometers and a population of around 1.6 million people.Sharjah is known for its rich cultural heritage, with a vibrant arts and cultural scene that has earned it the title of "Cultural Capital of the Arab World" by UNESCO in 1998.The emirate has a number of museums, galleries, and cultural centers, including the Sharjah Art Museum, Sharjah Heritage Museum, and the Sharjah Museum of Islamic Civilization.In addition to its cultural attractions, Sharjah is also home to a number of natural and man-made landmarks,such as the Al Qasba Canal, the Al Majaz Waterfront, and the Sharjah Aquarium. The emirate also has several parks,beaches, and wildlife reserves, including the Sharjah Natural History and Botanical Museum and the Arabian Wildlife Center.Sharjah is a major commercial and industrial center in the UAE, with a diverse economy that includes industries such as manufacturing,tourism, and finance. The emirate is also home to several universities and educational institutions,including the University of Sharjah and the American University of Sharjah.',
            'image'=> Storage::url('image/Emirate of Sharjah.jpg')
        ]);
        DB::table('cities')->insert([
            'country_id' => 2,
            'Name' => 'Emirate of Ajman',
            'description' =>'The Emirate of Sharjah is one of the seven emirates that make up the United Arab Emirates (UAE),located on the eastern coast of the Arabian Peninsula. It is the third-largest emirate in the UAE,with an area of approximately 2,590 square kilometers and a population of around 1.6 million people.Sharjah is known for its rich cultural heritage, with a vibrant arts and cultural scene that has earned it the title of "Cultural Capital of the Arab World" by UNESCO in 1998.The emirate has a number of museums, galleries, and cultural centers, including the Sharjah Art Museum, Sharjah Heritage Museum, and the Sharjah Museum of Islamic Civilization.In addition to its cultural attractions, Sharjah is also home to a number of natural and man-made landmarks,such as the Al Qasba Canal, the Al Majaz Waterfront, and the Sharjah Aquarium. The emirate also has several parks,beaches, and wildlife reserves, including the Sharjah Natural History and Botanical Museum and the Arabian Wildlife Center.Sharjah is a major commercial and industrial center in the UAE, with a diverse economy that includes industries such as manufacturing,tourism, and finance. The emirate is also home to several universities and educational institutions,including the University of Sharjah and the American University of Sharjah.',
            'image'=> Storage::url('image/Emirate of Ajman.jpg')
        ]);
        //England
        DB::table('cities')->insert([
            'country_id' => 3,
            'Name' => 'London',
            'description' => 'London is the capital city of England and the United Kingdom, located in the southeast of the country.It is one of the worlds most vibrant and dynamic cities, with a rich history that dates back over 2,000 years.London is a global hub for finance, business, culture, and entertainment, and is home to some of the worlds mosticonic landmarks and institutions.The city is divided by the River Thames, which flows through the heart of London and is crossed by numerous bridges.Some of the most famous landmarks in London include the Houses of Parliament, the Tower of London,Buckingham Palace, the London Eye, and the Shard.London is also renowned for its museums and galleries, including the British Museum,the National Gallery, and the Tate Modern.',
            'image'=> Storage::url('image/London.jpg')
        ]);
        //France
        DB::table('cities')->insert([
            'country_id' => 4,
            'Name' => 'Paris',
            'description' => 'Paris is the capital and largest city of France, located in the northern part of the country.It is known as the "City of Light" and is renowned for its art, fashion, cuisine, and architecture.Paris is home to some of the worlds most famous landmarks,including the Eiffel Tower, the Louvre Museum, Notre-Dame Cathedral, and Champs-Élysées avenue.Paris is also famous for its beautiful gardens, such as the Luxembourg Gardens,the Tuileries Gardens, and the Bois de Boulogne. The city is also known for its café culture,with an abundance of charming sidewalk cafés where locals and tourists alike can enjoy a cup of coffeeor a glass of wine while people-watching.',
            'image'=> Storage::url('image/Paris.jpg')
        ]);
    }
}
