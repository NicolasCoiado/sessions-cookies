<?php
    session_start();//Iniciando sessão;
    $_SESSION["usuario"] = $_POST['user']; //Criando o valor da sessão usuário com o resultado do fomulário enviado com método POST;
    $_SESSION["senha"] = $_POST['password'];//Criando o valor da sessão senha com o resultado do fomulário enviado com método POST;

    if($_SESSION["usuario"] == "Nicolas" && $_SESSION["senha"] == "20135") //Se a senha e o usuário estiverem corretos;
    { //essa condição acima não fazia sentido. Alterei.
        $_SESSION["user_login"] = true;//A sessão tem o valor igual à "true";
        header("Location: principal.php");//E o usuário é enviado à página "principal.php";
    }else{
        $_SESSION["user_login"] = false;//A sessão tem o valor igual à "false";
        header("Location: principal.php");//E o usuário é enviado à página "principal.php";
    }
?>
