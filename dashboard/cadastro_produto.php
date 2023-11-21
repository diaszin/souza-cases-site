<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.bundle.min.js" defer></script>
</head>

<body>
    <form action="produto/create.php" method="post">
        <div class="mb-3">
            <label for="productName" class="form-label">Digite o nome do produto</label>
            <input type="text" class="form-control" name="productName" id="productName">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Digite o preço do produto</label>
            <input type="text" class="form-control" name="productPrice" id="productPrice">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Descrição do produto</label>
            <textarea class="form-control" id="productDescription" name="productDescription" rows="3"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</body>

</html>