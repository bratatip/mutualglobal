<?php

namespace Database\Seeders;

use App\Helpers\UuidGeneratorHelper;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the Admin role ID
        $clientRoleId = DB::table('roles')->where('name', 'client')->first()->id;

        // Insert admin user with role_id
        DB::table('users')->insert([
            'uuid' => UuidGeneratorHelper::generateUniqueUuidForTable('users'),
            'name' => 'Test Client',
            'email' => 'sumitkumarbag.test@gmail.com',
            'password' => Hash::make('Sumit@123'),
            'role_id' => $clientRoleId,
            'is_email_verified' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $this->command->info('Client Done');
    }
}
