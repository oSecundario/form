<?php

    include('conexao.php');

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($conn){
        $sql = "INSERT INTO dados (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            if(mysqli_query($conn, $sql)){
                echo "Salvou no banco de dados";
            }else{
                echo "fudeo nao salvou!";
            }
    }





?>