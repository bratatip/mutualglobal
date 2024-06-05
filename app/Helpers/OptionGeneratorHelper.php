<?php

namespace App\Helpers;

use App\Models\Admin\Insurer;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OptionGeneratorHelper
{
    public static function generateClientOption($all = false)
    {
        if ($all) {
            $options = [null => 'All'];
        }
        $clientRoleId = DB::table('roles')->where('name', 'client')->first()->id;

        $users = User::where('role_id', $clientRoleId)->get();

        foreach ($users as $user) {
            $options[$user->uuid] = $user->name;
        }
        
        return $options;
    }

    public static function generateInsurerOption($all = false)
    {
        $options = [];
    
        if ($all) {
            $options[null] = 'All';
        }
    
        $insurers = Insurer::orderBy('name')->get();
    
        $insurers->each(function ($insurer) use (&$options) {
            $options[$insurer->uuid] = $insurer->name;
        });
    
        return $options;
    }
    
}
