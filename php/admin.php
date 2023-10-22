<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="stylesheet" href="css/fontawesome-free-web/css/all.css">
    <script defer src="js/admin.js"></script>
    <title>Aunimal | admin</title>
</head>
<body>

    <header class="navbar">
        <img class="navbar-image" src="assets/logo/logo.svg" class="logo-decoration" alt="Logo do hotel pet Aunimal">
        <div class="navbar-button-menu-pesquisa">
            <input class="navbar-pesquisa" type="text" name="barra-pesquisa" placeholder="buscar produto" id="">
            <button class="navbar-button-menu">
                <img src="assets/icon_menu.svg" alt="Botão do menu">
            </button>
        </div>
    </header>

    <div id="section-login-adm">
        <div class="card-login">
            <img src="assets/logo/logo.svg" alt="Logo do hotel pet Aunimal">
            <div class="card-login-linha"></div>
            <div class="card-login-titulo">Administrador</div>

            <form id="form-login" class="card-login-form">
                <div class="login-form">
                    <i class="fa-solid fa-user" style="color: #be3300;"></i>
                    <input type="text" placeholder="Usuário" name="usuario">
                </div>
                <div class="login-form">
                    <i class="fa-solid fa-lock" style="color: #be3300;"></i>
                    <input type="password" placeholder="Senha" name="senha">
                </div>
                <button type="button" onclick="login()">Login</button>
            </form>
        </div>
    </div>

    
</body>
</html>