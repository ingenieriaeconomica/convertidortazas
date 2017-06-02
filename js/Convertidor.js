$(function () {
	
	
});


function LimpiarCampos(){
	$("#select-periodo").val('0');
    $("#valor-convertir").val('');
    $("#select-forma-pago").val('0');
    
    if($("#nominal").is(':checked')){
    	$("#nominal").prop('checked', false);
    }
    if($("#efectivo").is(':checked')){
    	$("#efectivo").prop('checked', false);
    }
    if($("#periodico").is(':checked')){
    	$("#periodico").prop('checked', false);
    }



    $("#optionsRadioTasa").prop('checked', false);
}


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