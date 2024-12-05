<?php
session_start();

if (isset($_COOKIE['nome']) && isset($_SESSION['idade'])) {
    $nome = htmlspecialchars($_COOKIE['nome']);
    $idade = htmlspecialchars($_SESSION['idade']);
} else {
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="css/boasvindas.css">
</head>
<body>
    <h1>BEM-VINDO</h1>
    <h1>"Olá, <?php echo $nome; ?>! Você tem <?php echo $idade; ?> anos."</h1>
</body>
</html>
