<?php

namespace App\Services\Auth;

use App\Helpers\EmployeeIdGeneratorHelper;
use App\Helpers\PasswordGeneratorHelper;
use App\Helpers\UuidGeneratorHelper;
use App\Jobs\Auth\RegistrationNotificationToUserJob as AuthRegistrationNotificationToUserJob;
use App\Jobs\RegistrationNotificationToUserJob;
use App\Models\EmployeeAddress;
use App\Models\EmployeeData;
use App\Models\Role;
use App\Models\User;
use App\Services\LocationService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Monolog\Registry;

class RegistrationService
{
    public function register($data, $role)
    {
        DB::beginTransaction();
        try {

            $uuid = UuidGeneratorHelper::generateUniqueUuidForTable('users');
            $userRole = Role::where('name', $role)->first();
            $password = PasswordGeneratorHelper::generateRandomPassword(15);
            
            $user = User::create([
                'uuid' =>  $uuid,
                'role_id' => $userRole->id,
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($password),
                'verification_token' => Str::random(40),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::commit();
            if ($user) {
                dispatch(new AuthRegistrationNotificationToUserJob($user->email, $user->name, $password));
            }
            // return $user;

            return ['status' => 'success', 'message' => 'User Added Successfully !'];
        } catch (Exception $e) {
            DB::rollBack();
            // throw $e;
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
}
