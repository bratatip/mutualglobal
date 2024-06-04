<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\LoginService;
use Illuminate\Http\Request;

class ClientAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('client.auth.login');
    }


    /**
     * @Route("client/login", name="Client.doLogin")
     */
    public function doLogin(LoginRequest $request, LoginService $loginService)
    {
        return $loginService->doLogin($request, RouteServiceProvider::CLIENT, 'Client', 'client');
    }
}
