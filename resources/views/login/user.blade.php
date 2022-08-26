@extends('layouts.app')

@section('content')
    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                <form action="{{ route('login/user') }}" method="post">
                    @csrf

                    <div class="col-6">
                        <div class="form-group">
                            Nome: <input type="text" name="nome" class="form-control" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
<<<<<<< HEAD
=======
                            E-mail: <input type="email" name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                            Cpf: <input type="text" name="cpf" class="form-control" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
<<<<<<< HEAD
                            Cidade: <input type="text" name="cidade" class="form-control" />
=======
                            Senha: <input type="password" name="password" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
<<<<<<< HEAD
                            Estado: <input type="text" name="estado" class="form-control" />
=======
                            Endereço: <input type="text" name="endereco" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="form-group">
<<<<<<< HEAD
                            Bairro: <input type="text" name="bairro" class="form-control" />
=======
                            Número: <input type="text" name="numero" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
<<<<<<< HEAD
                            Rua: <input type="text" name="rua" class="form-control" />
=======
                            Complemento: <input type="text" name="complemento" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
<<<<<<< HEAD
                            Numero: <input type="text" name="numero" class="form-control" />
=======
                            Cidade: <input type="text" name="cidade" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
<<<<<<< HEAD
                            Email: <input type="email" name="email" class="form-control" />
=======
                            Cep: <input type="text" name="cep" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
<<<<<<< HEAD
                            Senha: <input type="password" name="senha" class="form-control" />
=======
                            Estado: <input type="text" name="estado" class="form-control" />
>>>>>>> 8549c6f744d1ea698820d9148bb96d2d7f90a13f
                        </div>
                    </div>
                    <input type="submit" value="Cadastrar" class="btn btn-success btn-sm" />
                </form>
            </div>
            </div>
        </div>
    </section>
    <!--/form-->
@endsection
