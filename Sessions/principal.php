<?php
  session_start(); //faltou iniciar a session aqui
    if($_SESSION["user_login"] == true){ //Se o valor de "user_login" for igual à true...
      //tirei o isset da linha de cima, pois ele só retorna se há algum valor na session.
        echo "Bem vindo ao Sistema";//Exibindo a mensagem requirida;
    }else{ //Se não...
        header("Location: index.php"); //O usuário é levado à página de login;
    }
?>
