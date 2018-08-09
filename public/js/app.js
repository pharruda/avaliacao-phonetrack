$(document).ready(function() {
    var btnProximo      = $('#btnProximo');
    var btnAnterior     = $('#btnAnterior');
    var formCadastro    = $('#cadastroForm');
    var etapaAtual      = $('#etapaAtual');
    var msgErrors       = $('#msgErrors');
    var estado          = $('#estado');
    var cidade          = $('#cidade');

    //armazena a etapa atual no navegador para continuar de onde parou
    if(!localStorage.etapa)
        localStorage.etapa = 1;

    if(!localStorage.usuario_id)
        localStorage.usuario_id = 0;


    addOrAttValueInputForm();
    alteraPasso();

    btnProximo.click(function (e) {
        e.preventDefault();
        console.log(formCadastro.serialize());
        $.ajax({
            url: config.routeCadastro.replace(':id', localStorage.usuario_id),
            type: 'POST',
            //contentType: "application/json",
            data: formCadastro.serialize(),
            dataType: 'JSON',
            success: function (data) {
                localStorage.usuario = JSON.stringify(data);
                localStorage.usuario_id = data.data.id;
                localStorage.estado_id = estado.val();
                addOrAttValueInputForm();

                if (localStorage.etapa <= 3)
                    localStorage.etapa = Number(localStorage.etapa) + 1;

                encerraCadastro();
                alteraPasso();
            },
            error: function (data) {
                if(data.status === 422) {
                    var li = '';
                    $.each(data.responseJSON.errors, function (i, item) {
                        li += '<li>' + item + '</li>'
                    });
                    msgErrors.html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><ul>' + li + ' </ul></div>');
                }else {
                    msgErrors.html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Ocorreu um erro!</div>');
                }
            }
        });

    });

    btnAnterior.click(function () {

        if (localStorage.etapa > 1)
            localStorage.etapa = localStorage.etapa - 1;

        alteraPasso();

    });

    // altera etapa
    function alteraPasso() {  //altera o valor do input para envio etapaAtual
        etapaAtual.val(localStorage.etapa);
        $('.alert').remove();
        if(localStorage.etapa == 1){
            $('#passo1').removeClass('d-none');
            $('#passo3').addClass('d-none');
            $('#passo2').addClass('d-none');
            btnAnterior.addClass('d-none');
            btnProximo.html('Próximo');
            $('#circle-etapa1').addClass('etapa-ativo');
            $('#circle-etapa2').removeClass('etapa-ativo');
            $('#circle-etapa3').removeClass('etapa-ativo');
        }else if(localStorage.etapa == 2) {
            $('#passo2').removeClass('d-none');
            $('#passo3').addClass('d-none');
            $('#passo1').addClass('d-none');
            btnAnterior.removeClass('d-none');
            $('#circle-etapa1').addClass('etapa-ativo');
            $('#circle-etapa2').addClass('etapa-ativo');
            $('#circle-etapa3').removeClass('etapa-ativo');
            btnProximo.html('Próximo');
        } else if(localStorage.etapa == 3) {
            $('#passo3').removeClass('d-none');
            $('#passo1').addClass('d-none');
            $('#passo2').addClass('d-none');
            $('#circle-etapa1').addClass('etapa-ativo');
            $('#circle-etapa2').addClass('etapa-ativo');
            $('#circle-etapa3').addClass('etapa-ativo');
            btnAnterior.removeClass('d-none');
            btnProximo.html('Finalizar Cadastro');
        }
    };

    function addOrAttValueInputForm() {
        if(localStorage.usuario) {
            usuario = JSON.parse(localStorage.usuario);
            $("#nome").val(usuario.data.nome);
            $("#data_nascimento").val(usuario.data.data_nascimento);
            $("#rua").val(usuario.data.rua);
            $("#numero").val(usuario.data.numero);
            $("#cep").val(usuario.data.cep);
            $("#telefone_celular").val(usuario.data.telefone_celular);
            $("#telefone_fixo").val(usuario.data.telefone_fixo);
            $('#estado option[value='+ localStorage.estado_id+']').attr('selected', 'selected');
            //remove disabled do select cidades
            cidade.attr("disabled", false);
            //atualiza o select cidade
            addCidadesAoSelect(localStorage.estado_id, usuario.data.cidade_id);
        }
    };

    //busca cidades por estado
    estado.on('change' , function () {
        var estado_id = $(this).val();
        addCidadesAoSelect(estado_id);
    });

    function addCidadesAoSelect(estado_id, cidade_id = null) {
        $.get(config.routeCidades.replace(':id', estado_id), function (cidades) {
            cidade.empty();
            cidade.attr("disabled", false);
            $.each(cidades, function(key, value) {
                if(value.id == cidade_id)
                    cidade.append('<option value="'+value.id+'" selected>'+ value.nome+'</option>');
                else
                    cidade.append('<option value="'+value.id+'">'+ value.nome+'</option>');
            });
        });
    };

    function encerraCadastro(){
        if(localStorage.etapa == 4) {
            alert('Cadastro efetuado com Sucesso!');
            localStorage.clear();
            window.location = config.routeUsuarios;
        }
    }

});