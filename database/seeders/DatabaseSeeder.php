<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Helpers\UuidGeneratorHelper;
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
    }
}
