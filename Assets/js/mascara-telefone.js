const telefone = document.getElementById('telefone') // Seletor do campo de telefone

telefone.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) // Dispara quando digitado no campo
telefone.addEventListener('change', (e) => mascaraTelefone(e.target.value)) // Dispara quando autocompletado o campo

const mascaraTelefone = (valor) => {
	valor = valor.replace(/\D/g, "")
	valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
	valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
	telefone.value = valor // Insere o(s) valor(es) no campo
}