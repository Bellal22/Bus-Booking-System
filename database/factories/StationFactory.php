<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
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
    }
}
