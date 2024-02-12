<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Helpers\UuidGeneratorHelper;
use App\Models\Area;
use App\Models\City;
use App\Models\Discount;
use App\Models\Hospital;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Get the Admin role ID
        $adminRoleId = DB::table('roles')->where('name', 'admin')->first()->id;

        // Insert admin user with role_id
        DB::table('users')->insert([
            'uuid' => UuidGeneratorHelper::generateUniqueUuidForTable('users'),
            'name' => 'Super Admin',
            'email' => env('SEEDER_ADMIN_EMAIL'),
            'password' => Hash::make(env('SEEDER_ADMIN_PASSWORD')),
            'role_id' => $adminRoleId,
            'is_email_verified' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $this->command->info('Admin Done');

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
