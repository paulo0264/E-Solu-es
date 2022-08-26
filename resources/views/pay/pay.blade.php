@extends('layouts.app')

@section('content')
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <form action="#">
                        @csrf
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <input type="email" placeholder="Email" />
                            <input type="text" placeholder="Nome" />
                            <input type="text" placeholder="Endereço" />
                            <input type="text" placeholder="Cidade" />
                            <input type="text" placeholder="Numero" />
                            <input type="email" placeholder="Email" />
                            <input type="password" placeholder="Password" />
                            <button type="submit" class="btn btn-success">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/form-->
@endsection