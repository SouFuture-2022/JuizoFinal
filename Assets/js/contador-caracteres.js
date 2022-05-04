$(document).on("input", "#descricao", function () {
	var limite = 1000;
	var caracteresDigitados = $(this).val().length;
	var caracteresRestantes = limite - caracteresDigitados;

	$(".caracteres").text(caracteresRestantes);
});