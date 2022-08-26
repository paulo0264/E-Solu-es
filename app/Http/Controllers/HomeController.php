<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $api = Http::get('http://127.0.0.1:8090/produtos');
        $results = $api->json();

        return view('home/home', compact('results'));

        //return view('home/home');
    }
}
