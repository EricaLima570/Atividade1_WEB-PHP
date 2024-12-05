<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="../css/listar.css">
</head>
<body>
    <h1>Lista de Produtos</h1>
    <ul>
        <?php
        // Lista simulada de produtos com IDs
        $produtos = [
            1 => 'Produto 1',
            2 => 'Produto 2',
            3 => 'Produto 3',
            4 => 'Produto 4',
            5 => 'Produto 5',
        ];

        // Gera os links para os produtos
        foreach ($produtos as $id => $nome) {
            echo "<li><a href='avaliar_produto.php?id=$id'>$nome</a></li>";//videoaula a respeito do get explica A REQUISIÇÃO com href e get: https://www.youtube.com/watch?v=_LLy5u-SMJM&list=PLwXQLZ3FdTVEITn849NlfI9BGY-hk1wkq&index=34
        }
        ?>
    </ul>
</body>
</html>
