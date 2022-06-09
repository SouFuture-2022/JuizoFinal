var inputQuantidade = document.querySelector("#input-quantidade");
var quantidadeEstabelecida = inputQuantidade.value;
var inputAtualizar = document.querySelector("#botao-atualizar");

inputQuantidade.addEventListener("input", function(){
    if(quantidadeEstabelecida != inputQuantidade.value){
        var botaoAtualizar = document.querySelector("#botao-atualizar");
        botaoAtualizar.classList.remove("btn-outline-primary");
        botaoAtualizar.classList.add("btn-primary");   
    }
});

