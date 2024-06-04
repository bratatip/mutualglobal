<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\City;
use App\Models\Discount;
use App\Models\Hospital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MiscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Hospital Info

        // Create Cities
        $city = City::create(['name' => 'Bengaluru']);

        // Create Areas
        $areasData = [
            ['city_id' => $city->id, 'name' => 'Begur'],
            ['city_id' => $city->id, 'name' => 'Vishwapriya Layout'],
            ['city_id' => $city->id, 'name' => 'Hogasandra'],
        ];
        Area::insert($areasData);

        // Create Hospitals
        $hospitalsData = [
            ['area_id' => Area::where('name', 'Begur')->first()->id, 'name' => ucwords('Ekana Hospital')],
            ['area_id' => Area::where('name', 'Vishwapriya Layout')->first()->id, 'name' => ucwords('Jayshree Multispeciality Hospital')],
            ['area_id' => Area::where('name', 'Vishwapriya Layout')->first()->id, 'name' => ucwords('Curemaxx Multispeciality Hospital')],
            ['area_id' => Area::where('name', 'Hogasandra')->first()->id, 'name' => ucwords('Sonu Hospital')],
        ];
        Hospital::insert($hospitalsData);

        // Create Discounts
        $discountsData = [
            ['hospital_id' => Hospital::where('name', 'Ekana Hospital')->first()->id, 'consultancy_discount_percentage' => 20, 'treatment_discount_percentage' => 20],
            ['hospital_id' => Hospital::where('name', 'Jayshree Multispeciality Hospital')->first()->id, 'consultancy_discount_percentage' => 10, 'treatment_discount_percentage' => 20],
            ['hospital_id' => Hospital::where('name', 'Curemaxx Multispeciality Hospital')->first()->id, 'consultancy_discount_percentage' => 0, 'treatment_discount_percentage' => 15],
            ['hospital_id' => Hospital::where('name', 'Sonu Hospital')->first()->id, 'consultancy_discount_percentage' => 0, 'treatment_discount_percentage' => 0],
        ];
        Discount::insert($discountsData);

        $this->command->info('Hospital Info Done');
    }
}
