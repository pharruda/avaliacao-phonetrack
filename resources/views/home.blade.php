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
            <h3 class="text-center">Avaliação PhoneTrack</h3>
            <hr>
            <div class="text-center">
                <span class="etapa" id="etapa1"></span>
                <span class="etapa"></span>
                <span class="etapa"></span>
            </div>

            <form action="#" >
                <div id="passo1" class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Nome</label>
                        <input type="text" class="form-control" id="validationTooltip04" name="nome" placeholder="Nome">
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data-nascimento" id="validationTooltip04">
                    </div>
                </div>

                <div class="form-row d-none" id="passo2">
                    <div class="col-md-9 mb-3">
                        <label for="validationTooltip04">Rua</label>
                        <input type="text" class="form-control" name="rua" id="validationTooltip04" placeholder="Rua">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Número</label>
                        <input type="text" class="form-control" name="numero" id="validationTooltip04" placeholder="Número">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip04">Estado</label>
                        <select class="custom-select" name="estado">
                            <option selected>Selecione o Estado</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip03">Cidade</label>
                        <select class="custom-select" name="cidade">
                            <option selected>Selecione a Cidade</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip05">CEP</label>
                        <input type="text" class="form-control" data-mask="00000-000" name="cep" id="validationTooltip05" placeholder="CEP">
                    </div>
                </div>

                <div id="passo3" class="form-row d-none">
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip05">Telefone Fixo</label>
                        <input type="text" class="form-control" name="telefone-fixo" data-mask="(00) 0000-0000" id="validationTooltip05" placeholder="Telefone Fixo">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip05">Telefone Celular</label>
                        <input type="text" class="form-control" data-mask="(00) 0000-00009" name="telefone-celular" id="validationTooltip05" placeholder="Telefone Celular">
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
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
