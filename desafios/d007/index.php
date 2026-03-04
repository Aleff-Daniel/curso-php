<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sala">Salário (R$)</label>
            <input type="number" name="sal" id="sal" step="0.01">
            <?php 
                echo "Considerando o salário mínimo de <strong>R\$1.621,00</strong>";
            ?>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $num = $_GET['sal'] ?? 0;
            $div = intdiv((int)$num, 1621);
            $res = $num - ($div * 1621);
            
            if ($num <= 0) {
                echo "<p>Não é possível digitar zero ou números negativos.</p>";
            }
            else {
                
                if ($div == 1) {
                    echo "<p>Quem recebe um salário de R\$ $num ganha <strong>1 salário mínimo</strong>";
                    if ($res > 0) {
                        echo " + R\$ $res.";
                    }
                    echo "</p>";
                }
                else {
                    echo "<p>Quem recebe um salário de R\$ $num ganha <strong>$div salários mínimos</strong> ";
                    if ($res != 0) {
                        echo "+ R\$ $res.";
                    }
                    echo "</p>";
                }
            }
        ?>
    </section>
</body>
</html>