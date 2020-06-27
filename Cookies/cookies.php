<?php //Author:Nicolas Coiado;
    $Nome = $_GET['name']; //Recebendo o nome do formulário de HTML;
    $Email = $_GET['email']; //Recebendo o email do formulário de HTML;
    $Cidade = $_GET['city']; //Recebendo o local de nascimento do formulário de HTML;

    setcookie('nome', $Nome, time()+3600);//setando o cookie de nome;
    setcookie('email', $Email, time()+3600;//setando o cookie de email;
    setcookie('cidade', $Cidade, time()+3600);//setando o cookie de cidade;

    header("Location: mensagem.php");//Redirecionando para a página que exibirá uma mensagem para o usuário.
?>