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

        <div class="col-sm-6 col-md-6" id="formularioCadastro">
            <div class="text-center">
                <h3>Avaliação PhoneTrack </h3>
                <a href="{{ route('usuario.all') }}">Usuários Cadastrados</a>
                <hr>
                <span class="etapa" id="circle-etapa1"></span>
                <span class="etapa" id="circle-etapa2"></span>
                <span class="etapa" id="circle-etapa3"></span>
            </div>

            <div id="msgErrors"></div>

            <form id="cadastroForm" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="passo" id="etapaAtual">

                <div id="passo1" class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Data de Nascimento</label>
                        <input type="text" data-mask="00/00/0000" class="form-control" name="data_nascimento" id="data_nascimento">
                    </div>
                </div>

                <div class="form-row d-none" id="passo2">
                    <div class="col-md-9 mb-3">
                        <label for="validationTooltip04">Rua</label>
                        <input type="text" class="form-control" name="rua" id="rua" placeholder="Rua">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Número</label>
                        <input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip04">Estado</label>
                        <select class="custom-select" id="estado" name="estado_id">
                            <option value="0" selected >Selecione o Estado</option>
                            @foreach($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip03">Cidade</label>
                        <select class="custom-select" id="cidade" name="cidade_id" disabled></select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip05">CEP</label>
                        <input type="text" class="form-control" id="cep" data-mask="00000-000" name="cep" placeholder="CEP">
                    </div>
                </div>

                <div id="passo3" class="form-row d-none">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip05">Telefone Fixo</label>
                        <input type="text" class="form-control" id="telefone_fixo" name="telefone_fixo" data-mask="(00) 0000-0000" placeholder="Telefone Fixo">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip05">Telefone Celular</label>
                        <input type="text" class="form-control" data-mask="(00) 0000-00009" name="telefone_celular" id="telefone_celular" placeholder="Telefone Celular">
                    </div>
                </div>
                <div class="row justify-content-md-center ">
                    <div class="col-md-6 mb-3 text-left">
                        <button type="button" id="btnAnterior" class="btn btn-default d-none">Anterior</button>
                    </div>
                    <div class="col-md-6 mb-3 text-right">
                        <button type="submit" id="btnProximo" class="btn btn-primary">Próximo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script>
        var config = {
            routeCadastro: "{{ route('usuario.cadastro', ':id') }}",
            routeCidades: " {{ route('cidade.mostraPorEstados', ':id') }}",
            routeUsuarios: " {{ route('usuario.all') }}"
        }
    </script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
