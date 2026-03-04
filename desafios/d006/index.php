<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="num" id="num">
            <label for="divi">Divisor</label>
            <input type="number" name="number2" id="number2">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $dividendo = $_GET['num'] ?? 0;
            $divisor = $_GET['number2'] ?? 0;
            $resto = $dividendo % $divisor;

            if ($divisor == 0) {
                echo "<p>Não é possível dividir por zero.</p>";}
            else {
                $resultado = $dividendo / $divisor;echo "<p>O resultado da divisão de $dividendo por $divisor é <strong>igual a $resultado.</strong></p>";
                }
            print "<p><strong>O dividendo é $dividendo, o divisor é $divisor, o resto é $resto e o quociente é $resultado.</strong></p>";
            
        ?>
    </section>
    
</body>
</html>