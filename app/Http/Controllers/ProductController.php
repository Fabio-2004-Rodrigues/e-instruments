<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($categoria = '')
    {
        $produtos = [];
        if (strlen($categoria) > 0) {
            $produtos = DB::table('estoque')
                ->where(
                    'categoria',
                    '=',
                    $categoria
                )
                ->select()
                ->get();
        } else {
            $produtos = DB::table('estoque')
                ->select()
                ->get();
        }


        return view('products.index')->with(['data' => $produtos]);
    }

    public function single_product($id)
    {
        $psingle = DB::table('estoque')
            ->where('id_produto', '=', $id)
            ->select()
            ->get();

        return view('products.single')->with(['data' => $psingle]);
    }
    public function cart($id)
    {
        $produtos = DB::table('estoque')
            ->where('id_produto', '=', $id)
            ->select()
            ->get();

        return view('products.cart')->with(['data' => $produtos]);
    }
}
