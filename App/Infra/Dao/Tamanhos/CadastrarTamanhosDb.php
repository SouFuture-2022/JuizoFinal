<?php

namespace App\Infra\Dao\Tamanhos;
use Infra\Database\Conexao;

class CadastrarTamanhosDb {

    public function insert(){
        $db = new Conexao();

		$sql = "INSERT INTO tamanhos (sub_categoria, tamanho_superior, tamanho_inferior, quantidade_tamanho, id_produto, criado_em) VALUES (:sub_categoria, :tamanho_superior, :tamanho_inferior, :quantidade_tamanho, :id_produto, NOW()";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':sub_categoria', $this->sub_categoria);
		$stmt->bindParam(':tamanho_superior', $this->tamanho_superior);
		$stmt->bindParam(':tamanho_inferior', $this->tamanho_inferior);
		$stmt->bindParam(':quantidade_tamanho', $this->quantidade_tamanho);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}

}