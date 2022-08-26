@extends('layouts.app')

@section('content')
    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <h2>Logar para sua Conta</h2>
                        <form action="{{ route('login/login') }}" method="post">
                        @csrf
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="senha" placeholder="Password" />
                            <span>
                                <input type="checkbox" class="checkbox">
                                Manter conectado
                            </span>
                            <button type="submit" class="btn btn-default">Logar</button>
                        </form>
                    </div>
                    <!--/login form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->
@endsection
