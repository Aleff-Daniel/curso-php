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

        <?= $dividendo = $_GET['num'] ?? 0;
            $divisor = $_GET['number2'] ?? 1;
            if ($divisor !=0) {
                $resto = $dividendo % $divisor;
            $resultado = (int) ($dividendo / $divisor); 
            }
            
        ?>

        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="num" id="num" min="0" value="<?=$dividendo?>">
            <label for="divi">Divisor</label>
            <input type="number" name="number2" id="number2" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
    
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $resultado ?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>