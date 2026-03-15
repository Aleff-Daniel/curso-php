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
        $min = 1_621.00;
        $num = $_GET['sal'] ?? $min;
        $div = intdiv((int)$num, $min);
        $res = $num - ($div * $min);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sala">Salário (R$)</label>
            <input type="number" name="sal" id="sal"  step="0.01">
            <p>Considerando o salário mínimo de R$ <?= number_format($min, 2,",", ".") ?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            
            
            if ($num <= 0) {
                echo "<p>Não é possível digitar zero ou números negativos.</p>";
            }
            else {
                
                if ($div == 1) {
                    echo "<p>Quem recebe um salário de R\$ ". number_format($num, 2, ",", ".")." ganha <strong>1 salário mínimo</strong>";
                    if ($res > 0) {
                        echo " + R\$ ". number_format($res, 2, ",", ".")."";
                    }
                    echo "</p>";
                }
                else {
                    echo "<p>Quem recebe um salário de R\$ ". number_format($num, 2, ",", ".")." ganha <strong>$div salários mínimos</strong> ";
                    if ($res != 0) {
                        echo "+ R\$ ". number_format($res, 2, ",", ".").".";
                    }
                    echo "</p>";
                }
            }
        ?>
    </section>
</body>
</html>