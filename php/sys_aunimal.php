<?php 
    session_start(); // Iniciar a sessão
    if((!isset($_SESSION['usuario'])) and (!isset($_SESSION['senha'])))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../index.html');
    }
    $logado = $_SESSION['usuario'];
    echo $logado;
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-admin.css">
    <link rel="stylesheet" href="../css/fontawesome-free-web/css/all.css">
    <script defer src="js/admin.js"></script>
    <title>Aunimal | Sistema</title>
</head>
<body>

    <header class="navbar">
        <img class="navbar-image" src="../assets/logo/logo.svg" class="logo-decoration" alt="Logo do hotel pet Aunimal">
        <div class="navbar-button-menu-pesquisa">
            <input class="navbar-pesquisa" type="text" name="barra-pesquisa" placeholder="buscar produto" id="">
            <button class="navbar-button-menu">
                <img src="../assets/icon_menu.svg" alt="Botão do menu">
            </button>
        </div>
    </header>

    <h1>BEM VINDO AO SISTEMA!</h1>

    
</body>
</html>