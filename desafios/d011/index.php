<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="re">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0,01">
            <label for="per">Qual o percentual de reajuste? (%)</label>
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "O produto que custava R\$, com<strong> % de aumento</strong> vai passar a custar <strong>R\$</strong> a partir de agora.";
        ?>
    </section>
</body>
</html>