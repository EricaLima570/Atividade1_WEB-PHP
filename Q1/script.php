<?php
session_start();// inicializando minha session. Always i have to make this :)


if (isset($_POST['nome']) && isset($_POST['idade'])) {// Valida dos dados vindos do forms
    
    $nome = htmlspecialchars($_POST['nome']);// metodo de segurança caso o input contenha caract especiais
    $idade = htmlspecialchars($_POST['idade']);

    // Armazena o nome em um cookie (expira em 7 segundos)
    setcookie('nome', $nome, time() + (7 ), '/');

    // Armazena a idade na sessão
    $_SESSION['idade'] = $idade;

    // indo para a pagina de boas_vindas
    header('Location: boasVindas.php');
    exit();
} else {
    //Para caso os dados não sejam enviados corretamente
    die('Erro: Dados inválidos.');
}

