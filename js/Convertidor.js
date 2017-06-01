$(function () {
	
	
});


function ConvertirTasa(e){

	var selecPeriodo = $("#select-periodo").val();
    var valorConvertir = parseFloat($("#valor-convertir").val());

	if(selecPeriodo == 0){
		alert('seleccione un periodo');
	}
	
	if(valorConvertir ==''){
		alert('Ingrese un Valor a Convertir');
	}else{

		valorConvertir = (valorConvertir/100);
	}

    var base = (1 + valorConvertir);

    var exponente = (360/30);

	var ressultado = Math.pow(base, exponente);

	ressultado = (ressultado - 1) * 100;

	alert(parseInt(ressultado));

}