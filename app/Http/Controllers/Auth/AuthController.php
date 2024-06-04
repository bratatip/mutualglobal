<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        Auth::logout();
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request, LoginService $loginService)
    {
        $result = $loginService->doLogin($request->validated());

        if ($result['success']) {
            return response()->json(['success' => true, 'routeName' => $result['routeName']]);
        }

        return response()->json(['success' => false, 'message' => $result['message']]);
    }


    public function logOut(Request $request)
    {
        Session::flush();

        Auth::logout();

        $request->session()->invalidate();
        return redirect('/');
    }
}
