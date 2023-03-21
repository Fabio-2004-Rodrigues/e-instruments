<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdmProdutosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmProdutosController extends Controller
{
    public function contactadm(){
        return view('adm.contact-adm');
    }

    public function home()
    {
        return view('adm.index');
    }

    public function index()
    {
        $produtos = DB::table('estoque')
            ->select()
            ->get();

        $data = [
            'produtos' => $produtos,
        ];

        return view('adm.produtos')->with(['data' => $data]);
    }

    public function form()
    {
        return view('adm.produto-form');
    }

    public function add(AdmProdutosRequest $request)
    {
        //armazenar campos
        //salvar
        //redirecionar

        $nome_produto = $request->input('nome_do_produto');
        $descricao = $request->input('descricao');
        $descricao = $request->input('descricao');
        $nome_da_empresa = $request->input('nome_da_empresa');
        $valor = $request->input('valor');
        $categoria = $request->input('categoria');
        $quantidade = $request->input('quantidade');
        $marca_do_produto = $request->input('marca_do_produto');
        $destaque = $request->input('destaque');


        if (($request->hasFile('img_produto') && $request->file('img_produto')->isValid()) == false) {
        }

        $requestImage = $request->img_produto;

        $extension = $requestImage->extension();

        $imageName = 'img/products/product-1/' . md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('img/products/product-1'), $imageName);

        DB::table('estoque')
            ->insert(
                [
                    'img_produto' => $imageName,
                    'nome_do_produto' => $nome_produto,
                    'descricao' => $descricao,
                    'nome_da_empresa' => $nome_da_empresa,
                    'destaque' => $destaque,
                    'valor' => $valor,
                    'categoria' => $categoria,
                    'quantidade' => $quantidade,
                    'marca_do_produto' => $marca_do_produto
                ]
            );
        return redirect('/admin/produtos/form?create=true');
    }

    public function remove(AdmProdutosRequest $request)
    {
        DB::table('estoque')
            ->where('id_produto', '=', $request->id)
            ->delete();
        return redirect('/admin/produtos?deletado=true');
    }
}
