<?php

namespace App\Http\Controllers\StaticWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticWebController extends Controller
{
    public function indexAction(){
        return view('a-mgib-static.index');
    }

    public function firePageView(){
        return view('a-mgib-static.fire');

    }
}
