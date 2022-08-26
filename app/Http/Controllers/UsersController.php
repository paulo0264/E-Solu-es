<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class UsersController extends Controller
{
    public function user(Request $request){
        //$dados = $request->all();
        $response = Http::post('http://127.0.0.1:8090/usuarios', [
            'nome'=> $request->input('nome'),
            'cpf'=> $request->input('cpf'),
            'cidade'=> $request->input('cidade'),
            'estado'=> $request->input('estado'),
            'bairro'=> $request->input('bairro'),
            'rua'=> $request->input('rua'),
            'numero'=> $request->input('numero'),
            'email'=> $request->input('email'),
            'senha'=> $request->input('senha'),
            

        ]);

        return view("login/user");
    }

    // public function login(Request $request){
    //     // if ($response = Http::post('http://127.0.0.1:8090/usuarios',['email' => $request->email, 'senha' => $request->senha])){
    //     //     dd('vc esta logado');
    //     // }else{
    //     //     dd('vc nao esta logado');
    //     // }
    // }

}
