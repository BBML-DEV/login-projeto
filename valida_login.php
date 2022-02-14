<?php

    session_start();


    //usuários do sistema
    $usuarios_app = array(
        array("email" => "adm@teste.com.br", "senha" => "123456"),
        array("email" => "user@teste.com.br", "senha" => "abcd")
    );

    //variavél de verificação
    $usuarios_autenticado = false;


    foreach ($usuarios_app as $user) {
        
        if ($user["email"] == $_POST["email"]  && $user["senha"] == $_POST["senha"]) {
            $usuarios_autenticado = true;
        }
    }

    if ($usuarios_autenticado) {
        echo "Usuário autenticado";
        $_SESSION["autenticado"] = "SIM";
        header("Location: index2.php");
        
    } else {
        $_SESSION["autenticado"] = "NAO";
        header("Location: index.php?login=erro");
    }
?>