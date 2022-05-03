<?php
namespace Infra\Dao\Endereco;
use PDO;
use Infra\Database\Conexao;
//alterarendereços
class Update_Endereco{
    public function update($id_usuario) {
		$sql  = "UPDATE enderecos SET nome = :nome, email = :email WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id_usuario);
		return $stmt->execute();
	}
}