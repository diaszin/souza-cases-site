<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souza Cases - Dashboard</title>
    <!-- Link do Bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <script src="./js/events.js" defer></script>
</head>
<body class="d-flex  flex-column align-items-center justify-content-center">
    <?php
        if(!isset($_COOKIE["isLogged"]) || $_COOKIE["isLogged"] == false){
            header("location: ../login.php");
        }
    ?>
    <h2 class="h2 d-flex  flex-row align-items-center justify-content-center" style="height: 10rem;">Produtos cadastrados</h2>
    <div class="d-flex flex-column align-items-center justify-content-center w-75">
        <div class=" align-self-start my-2">
            <a href="cadastro_produto.php" class="btn btn-primary">Cadastrar Produto</a>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Preço do Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col" colspan="3">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "{$_SERVER['DOCUMENT_ROOT']}/souza-cases-site/dashboard/shared/instances.php";
                $consultaProdutos = $produto->getAll("ASC"); // consulta de produtos de forma crescente
                foreach ($consultaProdutos as $linha) {
                    $idProduto = $linha['id'];
                    $nomeProduto = $linha['nome'];
                    $precoProduto = str_replace(".", ",", $linha['preco']);
                    $descricaoProduto = strlen(trim($linha['descricao'])) > 0 ? $linha['descricao'] : "--";
                    echo " <tr>
                <th scope='row'>$idProduto</th>
                <td>$nomeProduto</td>
                <td>R$ $precoProduto</td>
                <td>$descricaoProduto</td>
                <td><button type='button' class='btn btn-light'>Ver imagem</button></td>
                <td><button type='button' class='btn btn-secondary'>Atualizar</button></td>
                <td><button type='button' class='btn btn-danger' onclick='deleteProduct($idProduto)'>Excluir</button></td>
            </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>