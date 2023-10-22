<?php 
    session_start(); # Iniciar sessão para  cada login

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (!empty($usuario) && !empty($senha)) # Verificar se os campos estão vazios
    {
 
        # Acessar o banco dados
        include_once("config_db.php");
        
        $query = "SELECT * FROM administrador WHERE usuario = '$usuario' AND senha = '$senha'";
        
        $verificar = mysqli_query($conexao, $query);

        if (mysqli_num_rows($verificar) < 1) # Verificar consulta no banco de dados, retorna false se não houverem os dados
        {
            echo 'Não existe!';
        } else {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: index.html');
        }

    } else 
    {
        echo 'Erro ou campos vazios!';
    }


    mysqli_close($conexao);

?>