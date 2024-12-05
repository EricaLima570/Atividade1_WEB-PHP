<?php

if (!isset($_POST['idProduto'], $_POST['nota']) || !is_numeric($_POST['idProduto']) || !is_numeric($_POST['nota'])) {
    // Exibe um erro se os dados não forem válidos
    die('Erro: Dados inválidos.');
}

$idProduto = (int) $_POST['idProduto'];
$nota = (int) $_POST['nota'];

// Valida a nota para garantir que está no intervalo de 1 a 5
if ($nota < 1 || $nota > 5) {
    die('Erro: A nota deve ser entre 1 e 5.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação Recebida</title>
</head>
<body>
    <h1>Obrigado!</h1>
    <p>Obrigado por avaliar o Produto <?php echo $idProduto; ?> com a nota <?php echo $nota; ?>.</p>
</body>
</html>
