<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.bundle.min.js" defer></script>
</head>

<body class="h-100">
    <div class="d-flex align-items-center justify-content-center w-100 h-100">
        <form action="produto/create.php" method="post" class="w-50 h-75">

            <div class="mb-3">
                <label for="productName" class="form-label">Digite o nome do produto <span class="text-danger">*</span></label>
                <input required type="text" class="form-control" name="productName" id="productName">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Digite o preço do produto <span class="text-danger">*</span></label>
                <input placeholder="R$ xxxx,xx" pattern="/[0-9]{1,5}[.|,][0-9]{2}/g" required type="number" class="form-control" name="productPrice" id="productPrice">
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Descrição do produto <span class="text-danger">*</span></label>
                <textarea required class="form-control" style="resize: none;" id="productDescription" name="productDescription" rows="8"></textarea>
            </div>
            <div class="mb-3">
                <label for="productImage" title="Caso não seja escolhido nenhuma imagem, o produto só irá aparecer no modo tabela" class="form-label">Escolha a imagem do produto</label>
                <input class="form-control" type="file" id="productImage">
            </div>
            <div class="d-flex w-100 gap-3" style="height: 3.2rem;">
                <input class="btn btn-primary w-100" type="submit" value="Cadastrar Produto">
                <a class="btn btn-secondary w-100 d-flex justify-content-center align-items-center" href="./">
                    Ir para o Dashboard
                </a>
            </div>
        </form>
    </div>

</body>

</html>