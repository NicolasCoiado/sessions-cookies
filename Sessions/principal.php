<?php
    if( isset($_SESSION["user_login"]) == true){ //Se o valor de "user_login" for igual à true...
        echo "Bem vindo ao Sistema";//Exibindo a mensagem requirida;
    }else{ //Se não...
        header("Location: index.php"); //O usuário é levado à página de login;
    }
?>