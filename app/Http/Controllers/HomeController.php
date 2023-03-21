<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = DB::table('estoque')
            ->where('destaque', '=', '1')
            ->select()
            ->get();

        return view('home.index')->with(['data' => $produtos]);
    }
}
