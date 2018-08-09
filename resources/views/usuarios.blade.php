<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avaliação PhoneTrack</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <div class="row justify-content-md-center" >
        <div class="col-sm-12" id="formularioCadastro">
            <div class="text-center">
                <h3>Avaliação PhoneTrack </h3>
                <a href="{{ route('home') }}" id="btnUsuario">Cadastrar novo Usuário</a>
                <hr>
            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Rua</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Tel. Fixo</th>
                    <th scope="col">Tel. Cel.</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <th>{{ $usuario->nome }}</th>
                        <th>{{ $usuario->data_nascimento }}</th>
                        <th>{{ $usuario->rua }}</th>
                        <th>{{ $usuario->cep }}</th>
                        <th>{{ ($usuario->cidade->nome ?? '') }}</th>
                        <th>{{ ($usuario->cidade->estado->nome ?? '') }}</th>
                        <th>{{ $usuario->telefone_fixo }}</th>
                        <th>{{ $usuario->telefone_celular }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script>
        if(localStorage.usuario)
            $('#btnUsuario').html('Continuar Cadastro');
    </script>
    </body>
</html>
