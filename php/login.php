<?php 


    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if (!empty($usuario) && !empty($senha)) # Verificar se os campos estão vazios
    {
 
        // Acessar o banco dados
        include_once("config_db.php");
        
        $query = "SELECT * FROM administrador WHERE usuario = '$usuario' AND senha = '$senha'";
        
        mysqli_query($conexao, $query);


    } else 
    {
        echo "Erro ou campos vazios!";
    }


    



?>