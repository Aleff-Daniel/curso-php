<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $num = $_GET["num"] ?? 0;
            

            
            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";

            echo "<p>A sua raiz quadrada é <strong></strong></p>";
            echo "<p>A sua raiz cúbica é <strong></strong></p>";
        ?>
    </section>
    
</body>
</html>