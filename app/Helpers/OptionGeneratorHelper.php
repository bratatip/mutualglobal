<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OptionGeneratorHelper
{
    public static function clientOptionGenerate($all = false)
    {
        if ($all) {
            $options = [null => 'All'];
        }
        $clientRoleId = DB::table('roles')->where('name', 'client')->first()->id;

        $users = User::where('role', $clientRoleId)->get();

        foreach ($users as $user) {
            $options[$user->uuid] = $user->full_name;
        }

        return $options;
    }
}
