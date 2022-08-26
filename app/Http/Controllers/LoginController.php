<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function login(Request $request){

        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        
        $email = $request->input('email');
        $senha = $request->input('senha');
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/usuarios/email/'. $email);
        
        $log = $response->json();
        if($log == null){
            return view("login/login");
        }
        
        
        if($log != null){
            $ID_logado = intval($log['email']);
            //setCookie_logado($ID_logado);
            if($log['email'] == $email && $log['senha'] == $senha ){
                return view("home/home");
            }else{
                return view("login/login");
            }
        }
        
    }
    
}
