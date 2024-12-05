<?php
// Verifica se o ID do produto foi enviado via GET
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    // Redireciona para a lista de produtos se o ID não for válido
    header('Location: listar_produtos.php');
    exit();
}

$idProduto = (int) $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Produto</title>
    <link rel="stylesheet" href="avaliar.css">
</head>
<body>
    <h1>Avaliação do Produto <?php echo $idProduto; ?></h1>
    <form action="processarnota.php" method="POST">
        <label for="nota">Escolha uma nota de 1 a 5:</label>
        <select name="nota" id="nota" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br><br>
        <!-- Inclui o ID do produto como campo oculto -->
        <input type="hidden" name="idProduto" value="<?php echo $idProduto; ?>">
        <button type="submit">Enviar Avaliação</button>
    </form>
</body>
</html>
