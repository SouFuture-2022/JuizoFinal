function calculo(){
	var cep = $("#cep").val();
	var frete = $("#frete").val();
	var peso = $("#peso").val();
	var valor = $("#valor").val();

	$.post('/../Services/CalcularFrete.php',{cep:cep, frete:frete, peso:peso, valor:valor},function(data){
	$("#retorno").html(data);
	});
}
// // 