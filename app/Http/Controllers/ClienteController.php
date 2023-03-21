<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function sign_in()
    {
        return view('users.sign-in');
    }
    public function sign_up()
    {
        return view('users.sign-up');
    }

    public function index()
    {
        $usuario = DB::table('users')
            ->select()
            ->get();

        return view('adm.clientes')->with(['data' => $usuario]);
    }
    public function remove(ClienteRequest $request)
    {
        DB::table('users')
            ->where('id', '=', $request->id)
            ->delete();
        return redirect('/admin/clientes?deletado=true');
    }

    public function add(ClienteRequest $request)
    {
        //armazenar campos
        //salvar
        //redirecionar

        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $cpf_rg = $request->input('cpf_rg');
        $estado = $request->input('estado');
        $endereco = $request->input('endereco');
        $cidade = $request->input('cidade');

        DB::table('usuario')
            ->insert(
                [
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha,
                    'cpf_rg' => $cpf_rg,
                    'estado' => $estado,
                    'endereco' => $endereco,
                    'cidade' => $cidade,
                ]
            );

        return redirect('/');
    }
}
