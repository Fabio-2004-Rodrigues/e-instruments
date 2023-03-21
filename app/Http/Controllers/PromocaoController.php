<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocaoController extends Controller
{
    public function index()
    {
        $promocao = DB::table('promocao')
        ->select()
        ->get();

    return view('adm.promocoes')->with(['data' => $promocao]);
    }

    public function add(Request $request)
    {
        //armazenar campos
        //salvar
        //redirecionar

        $email = $request->input('email');

        DB::table('promocao')
            ->insert(
                [
                    'email' => $email,
                ]
            );

        return redirect('/');
    }

    public function remove(Request $request)
    {
        DB::table('promocao')
            ->where('id_promocao', '=', $request->id)
            ->delete();
        return redirect('/admin/promocoes?deletado=true');
    }
}
