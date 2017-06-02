$(function () {
	
	
});

/*
*Validar que hayan seleccionado campos
*/
function ValidarTasa(){

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

    ConvertirTasa();
}



/*
*Convertir tasas
*/
function ConvertirTasa(){

	var base = (1 + valorConvertir);

    var exponente = (360/30);

	var resultado = Math.pow(base, exponente);

	resultado = (resultado - 1) * 100;

	alert(parseInt(resultado));

}