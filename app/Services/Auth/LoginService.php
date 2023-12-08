<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginService
{
    public function doLogin($data)
    {
        // Check if remember me is checked
        $remember = isset($data['remember_me']) && $data['remember_me'];

        // Extract email and password from the request data
        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        // Attempt to authenticate the user
        if (!Auth::attempt($credentials, $remember)) {
            return ['success' => false, 'message' => 'Incorrect email or password'];
        }

        // Get the authenticated user
        $user = Auth::user();

        // Regenerate the session to prevent session fixation attacks
        session()->regenerate();

        // Logout other devices if remember me is not checked
        if (!$remember) {
            Auth::logoutOtherDevices($data['password']);
        }

        // Set the email and password as cookies if remember me is checked
        if ($remember) {
            Cookie::queue('email', $data['email'], 60 * 24 * 30); // 30 days
            Cookie::queue('password', $data['password'], 60 * 24 * 30); // 30 days
        } else {
            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
        }

        // Check user roles and redirect accordingly
        if ($user->hasRole('admin')) {
            // $routeName = 'admin.import-uhid-form';
            $routeName = '/admin/import-uhid-form';
        } elseif ($user->hasRole('employee')) {
            if (Auth::check()) {
                Auth::logout();
            }
            return ['success' => false, 'message' => 'You do not have the required role to access this page.'];
        } else {
            if (Auth::check()) {
                Auth::logout();
            }
            return ['success' => false, 'message' => 'You do not have the required role to access this page.'];
        }

        return ['success' => true, 'routeName' => $routeName];
    }
}
