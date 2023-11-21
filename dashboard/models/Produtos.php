<?php

include "../conexao.php";

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
            if($stmt == TRUE){
                echo 'Funcionou';
            }else{
                echo 'Não Funcionou';
            }
            // Fechar a conexão
            $conexao = null;

            echo "Produto cadastrado com sucesso!";
            $conexao = null;
        } catch (PDOException $e) {
            // Em caso de erro, imprimir a mensagem de erro
            echo "Erro ao cadastrar o produto: " . $e->getMessage();
        }
    }
}

?>
