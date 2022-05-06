<?php

namespace App\Infra\Dao\Tamanhos;

use Infra\Database\Conexao;

class  AlterarTamanhosDb {
    #id_produto estava sendo passado como parametro na função update, gerando um erro no bind param


    public function update($id_tamanho) {
        $db = new Conexao();

		$sql  = "UPDATE tamanhos SET sub_categoria = :sub_categoria, tamanho_superior = :tamanho_superior, tamanho_inferior = :tamanho_inferior, quantidade_tamanho = :quantidade_tamanho WHERE id_tamanho = :id_tamanho";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':sub_categoria', $this->sub_categoria);
		$stmt->bindParam(':tamanho_superior', $this->tamanho_superior);
		$stmt->bindParam(':tamanho_inferior', $this->tamanho_inferior);
		$stmt->bindParam(':quantidade_tamanho', $this->quantidade_tamanho);
		$stmt->bindParam(':id_tamanho', $id_tamanho);
		return $stmt->execute();
	}
}