<?php

namespace App\Http\Controllers\StaticWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticWebController extends Controller
{
    public function indexAction()
    {
        Auth::logout();
        return view('a-mgib-static.index');
    }

    public function firePageView()
    {
        return view('a-mgib-static.fire');
    }

    public function whyMutualGlobalPageView()
    {
        return view('a-mgib-static.why-mutual-global');
    }

    public function termsPageView()
    {
        return view('a-mgib-static.terms');
    }

    public function privacyPolicyPageView()
    {
        return view('a-mgib-static.privacy_policy');
    }
}
