<?php 
    session_start();
    unset($_SESSION['usuario']); # Excluir registro de usuário e senha caso não exista cadastro no banco de dados
    unset($_SESSION['senha']);
    header('Location: ../index.html');
?>