<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = DB::table('fornecedor')
            ->select()
            ->get();

        return view('adm.fornecedores')->with(['data' => $fornecedor]);
    }

    public function form()
    {
        return view('adm.fornecedores-form');
    }

    public function add(FornecedorRequest $request)
    {
        //armazenar campos
        //salvar
        //redirecionar

        $nome_da_empresa = $request->input('nome_da_empresa');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');
        $razao_social = $request->input('razao_social');
        $cnpj = $request->input('cnpj');
        $email = $request->input('email');
        $inscricao_estadual = $request->input('inscricao_estadual');

        DB::table('fornecedor')
            ->insert(
                [
                    'nome_da_empresa' => $nome_da_empresa,
                    'razao_social' => $razao_social,
                    'endereco' => $endereco,
                    'cnpj' => $cnpj,
                    'telefone' => $telefone,
                    'email' => $email,
                    'inscricao_estadual' => $inscricao_estadual,
                    'senha' => 0,
                ]
            );

        return redirect('/admin/fornecedores/form?create=true');
    }

    public function remove(FornecedorRequest $request)
    {
        DB::table('fornecedor')
            ->where('id_fornecedor', '=', $request->id)
            ->delete();
        return redirect('/admin/fornecedores?deletado=true');
    }
}
