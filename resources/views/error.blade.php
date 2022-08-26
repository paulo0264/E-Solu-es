@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="logo-404">
            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
        </div>
        <div class="content-404">
            <img src="{{ url ('assets/images/404/404.png')}}" class="img-responsive" alt="" />
            <h1><b>OPS! </b> - Página não encontrada</h1>

        </div>
    </div>
@endsection
