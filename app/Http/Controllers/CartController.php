<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $produtos = DB::table('carrinho')
            ->join('estoque', 'carrinho.id_produto', '=', 'estoque.id_produto')
            ->select()
            ->get();

        $total_carrinho = 0.0;

        foreach($produtos as $produto) {
            $total_carrinho += $produto->valor_final;
        }


        $data = [
            'produtos' => $produtos,
            'total_carrinho' => $total_carrinho
        ];

        return view('cart.index')->with(['data' => $data]);
    }

    public function add(CartRequest $request)
    {
        $url_origem = $request->getRequestUri();

        $produto_id = $request->input('produto_id');
        $quantidade = $request->input('quantidade') ?? 1;
        $valor = $request->input('valor');

        DB::table('carrinho')->insert(
            [
                'id_produto' => $produto_id,
                'quantidade' => $quantidade,
                'valor_final' => $valor
            ]
        );

        return redirect('/cart');
    }

    public function remove(CartRequest $request)
    {
        $produto_id = $request->input('produto_id');
        DB::delete("delete from carrinho where id_produto = $produto_id");

        return redirect('/cart');
    }
}
