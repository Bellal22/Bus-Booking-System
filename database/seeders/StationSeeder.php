<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return \string[][]
     */
    public function run()
    {
        $stations =  [
            ["title:ar"=>"القاهرة","title:en"=>"Cairo"],
            ["title:ar"=>"الجيزة","title:en"=>"Giza"],
            ["title:ar"=>"الأسكندرية","title:en"=>"Alexandria"],
            ["title:ar"=>"الدقهلية","title:en"=>"Dakahlia"],
            ["title:ar"=>"البحر الأحمر","title:en"=>"Red Sea"],
            ["title:ar"=>"البحيرة","title:en"=>"Beheira"],
            ["title:ar"=>"الفيوم","title:en"=>"Fayoum"],
            ["title:ar"=>"الغربية","title:en"=>"Gharbiya"],
            ["title:ar"=>"الإسماعلية","title:en"=>"Ismailia"],
            ["title:ar"=>"المنوفية","title:en"=>"Menofia"],
            ["title:ar"=>"المنيا","title:en"=>"Minya"],
            ["title:ar"=>"القليوبية","title:en"=>"Qaliubiya"],
            ["title:ar"=>"الوادي الجديد","title:en"=>"New Valley"],
            ["title:ar"=>"السويس","title:en"=>"Suez"],
            ["title:ar"=>"اسوان","title:en"=>"Aswan"],
            ["title:ar"=>"اسيوط","title:en"=>"Assiut"],
            ["title:ar"=>"بني سويف","title:en"=>"Beni Suef"],
            ["title:ar"=>"بورسعيد","title:en"=>"Port Said"],
            ["title:ar"=>"دمياط","title:en"=>"Damietta"],
            ["title:ar"=>"الشرقية","title:en"=>"Sharkia"],
            ["title:ar"=>"جنوب سيناء","title:en"=>"South Sinai"],
            ["title:ar"=>"كفر الشيخ","title:en"=>"Kafr Al sheikh"],
            ["title:ar"=>"مطروح","title:en"=>"Matrouh"],
            ["title:ar"=>"الأقصر","title:en"=>"Luxor"],
            ["title:ar"=>"قنا","title:en"=>"Qena"],
            ["title:ar"=>"شمال سيناء","title:en"=>"North Sinai"],
            ["title:ar"=>"سوهاج","title:en"=>"Sohag"]
        ];
        foreach ($stations as $station) {
            Station::create($station);
        }

    }
}
