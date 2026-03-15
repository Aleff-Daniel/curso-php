<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    
    $val1 = $_POST["val1"] ?? '';
    $val2 = $_POST["val2"] ?? '';
    $pes1 = $_POST["pes1"] ?? '';
    $pes2 = $_POST["pes2"] ?? '';
    
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor1">1° Valor</label>
            <input type="number" name="val1" id="val1" required value="<?= $val1 ?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="pes1" id="pes1" required value="<?= $pes1 ?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="val2" id="val2" required value="<?= $val2 ?>">
            <label for="pes2">2° Peso</label>
            <input type="number" name="pes2" id="pes2" required value="<?= $pes2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das Médias</h2>
        <?php 
            $med = (float) ($val1 + $val2) / 2;
            $medp = (float) (($val1 * $pes1 + $val2 * $pes2) / ($pes1 + $pes2));

            echo "<p>Analisando os valores $val1 e $val2:</p>";

            echo "<p>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>".number_format($med, 2, ",", ".")."</strong>.</p>";
            echo "<p>A <strong>Média Aritmética Ponderada</strong> com pesos $pes1 e $pes2 é igual a <strong>". number_format($medp, 2, ",", ".") ."</strong>.</p>";

        ?>
    </section>
    
</body>
</html>