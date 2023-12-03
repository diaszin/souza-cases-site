<?php

include "{$_SERVER['DOCUMENT_ROOT']}/souza-cases-site/dashboard/conexao.php";

class Produto {
    // Método para criar um novo produto
    public function create($nome, $preco, $descricao) {
        // Utilizando a conexão global
        global $conexao;

        try {
            // Preparar a instrução SQL
            $sql = "INSERT INTO produto (nome, preco, descricao) VALUES (?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            // Bind dos parâmetros
            $stmt->bind_param("sds", $nome, $preco, $descricao);

            // Executar a instrução SQL
            $stmt->execute();
            $conexao = null;
        } catch (PDOException $e) {
            // Em caso de erro, imprimir a mensagem de erro
            echo "Erro ao cadastrar o produto: " . $e->getMessage();
        }
    }

    public function getAll(string $orderBy = "ASC"|"DESC"){
        global $conexao;
        $sql = "SELECT id, nome, preco, descricao FROM produto ORDER BY id $orderBy;";
        $found = $conexao->query($sql);
        $result = array();
        while($row = $found->fetch_assoc()){
            array_push($result, $row);
        }

        return $result;
    }

    public function delete(int $id){
        global $conexao;
        $sql = "DELETE FROM produto WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("d", $id);
        return $stmt->execute();
    }
}

?>
