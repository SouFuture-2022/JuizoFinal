$(document).ready(function() {
	$('#tamanhoSuperior').hide();
	$('#tamanhoInferior').hide();

	$('#sub_categoria').change(function() {
		if ($('#sub_categoria').val() == 'Camisas' || $('#sub_categoria').val() == 'Vestidos') {
		  $('#tamanhoSuperior').show();
		} else {
		  $('#tamanhoSuperior').hide();
		}

		if ($('#sub_categoria').val() == 'Calças' || $('#sub_categoria').val() == 'Calçados') {
		  $('#tamanhoInferior').show();
		} else {
		  $('#tamanhoInferior').hide();
		}
	});
});