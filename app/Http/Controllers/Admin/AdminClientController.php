<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\PolicyStoreRequest;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    public function registerClientView()
    {
        return view('admin.client.register.index');
    }

    public function addClientPolicyView(){
        return view('admin.client.policy.add');

    }

    public function storeClientPolicy(PolicyStoreRequest $request){
        dd($request->all());
    }
}
