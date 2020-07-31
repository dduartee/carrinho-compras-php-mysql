<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <center>

        <?php
        require("conexao.php");

        $sql = "SELECT * FROM produtos";
        $query = mysqli_query($link, $sql) or die(mysqli_error($link));
        while ($array = mysqli_fetch_assoc($query)) {
            echo '<h2>' . $array["nome"] . '</h2> <br>';
            echo 'preço: R$ ' . number_format($array['preco'], 2, ',', '.') . '<br>';
            echo '<img width="300px"src="img/produtos/' . $array['imagem'] . '"/> <br>';
            echo '<a href="carrinho.php?acao=add&id=' . $array['id'] . '">Adicionar ao carrinho</a>';
            echo '<br> <hr>';
        }
        ?>
</body>

</html>