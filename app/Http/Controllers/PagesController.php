<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function tracking()
    {
        return view('pages.tracking');
    }
    public function chekout()
    {
        return view('pages.chekout');
    }
}
