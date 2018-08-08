$(document).ready(function() {
    var btnProximo = $('#btnProximo');
    var btnAnterior = $('#btnAnterior');
    //armazena a etapa atual no navegador para continuar de onde parou
    if(!localStorage.etapa)
        localStorage.etapa = 1;

    alteraEtapa();

    btnProximo.click(function () {

        if (localStorage.etapa <= 3)
            localStorage.etapa = Number(localStorage.etapa) + 1;

        alteraEtapa();

    });

    btnAnterior.click(function () {

        if (localStorage.etapa > 1)
            localStorage.etapa = localStorage.etapa - 1;

        alteraEtapa();

    });

    // altera etapa
    function alteraEtapa() {
        if(localStorage.etapa == 1){
            $('#passo1').removeClass('d-none');
            $('#passo3').addClass('d-none');
            $('#passo2').addClass('d-none');
            btnAnterior.addClass('d-none');
            btnProximo.html('Próximo');
        }else if(localStorage.etapa == 2) {
            $('#passo2').removeClass('d-none');
            $('#passo3').addClass('d-none');
            $('#passo1').addClass('d-none');
            btnAnterior.removeClass('d-none');
            btnProximo.html('Próximo');
        } else if(localStorage.etapa == 3) {
            $('#passo3').removeClass('d-none');
            $('#passo1').addClass('d-none');
            $('#passo2').addClass('d-none');
            $('.etapa').first().addClass('etapa-ativo');
            btnAnterior.removeClass('d-none');
            btnProximo.html('Finalizar Cadastro');
        }
    }
});