<?php
    include ("conexao.php");

    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $mesage=$_POST["mesage"];    
   

    $sql="INSERT INTO clientes (nome, email, mesage) VALUES
    ('$nome', '$email', '$mesage')";

    if(mysqli_query($conexao, $sql))
    {
        echo "<h1>Login cadastrado com sucesso!</h1>";
    }
    else
    {
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>