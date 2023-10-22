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
            unset($_SESSION['usuario']); # Excluir registro de usuário e senha caso não exista cadastro no banco de dados
            unset($_SESSION['senha']);
            $json  = json_encode(false);
            echo $json;           
        } 
        else 
        {
            $_SESSION['usuario'] = $usuario; # Criar variaveis para a sessão
            $_SESSION['senha'] = $senha;
            $json  = json_encode(true);
            echo $json;
        }

    } else 
    {
        $json  = json_encode(false);
        echo $json; 
    }


    mysqli_close($conexao);

?>