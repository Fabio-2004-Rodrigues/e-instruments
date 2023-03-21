<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function privacy() 
    {
        return view('policy.privacy_policy');
    }
    public function refund() 
    {
        return view('policy.refund_policy');
    }
    public function terms() 
    {
        return view('policy.terms_conditions');
    }
}

