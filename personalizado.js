$(function(){

    $("#converte").click(function(){

        var valor = $("#valorEntrada").val();
        var moeda = $("#moeda").val();

            var resultado = multiplica(valor, moeda);

            $(".result").html('<h2>Na Conversão de Hoje é: '+resultado+' Reais</h2>')

            function multiplica(valor, moeda){

            var resultado = 0;

            resultado = valor * moeda;

            return resultado.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });;

            }   
    });
});