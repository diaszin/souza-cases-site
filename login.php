<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard/bootstrap/css/bootstrap.min.css">
    <script src="./dashboard/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <title>Login - Área Administrativa</title>
</head>

<body class=" d-flex flex-column gap-3 align-items-center justify-content-center h-100 w-100">
    <h3>Login - Souza Cases Admin</h3>
    <form class="w-25" action="./user/login.php" method="post" autocomplete="off">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="showPassword">
                <label class="form-check-label" for="showPassword">
                    Mostrar Senha
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Fazer login</button>
    </form>
    <!-- Script -->
    <script>
        const showPasswordCheckbox = document.getElementById("showPassword")
        showPasswordCheckbox.addEventListener("change", () => {
            const passwordInput = document.getElementById("password")
            if (showPasswordCheckbox.checked === true) {
                passwordInput.type = "text"
            } else {
                passwordInput.type = "password"
            }

        })
    </script>
</body>

</html>