<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['valor'] ?? 0;
        $resto = $saque;

        $tot100 = $tot50 = $tot20 = $tot10 = $tot5 = $tot2 = 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="id1">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" required value="<?= $saque ?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5 e R$2</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
    <?php 
        if ($saque > 0) {

            if ($saque == 1 || $saque == 3) {
                echo "<p><strong>Não é possível sacar esse valor, pois o caixa não trabalha com moedas.</strong></p>";
            }
            else {
                
        
                //Saque de 100 reais
                $tot100 = intdiv($resto, 100);
                $resto = $resto % 100;
        
                //Saque de 50 reais
                $tot50 = intdiv($resto, 50);
                $resto %= 50;
        
                //Saque de 20 reais
                $tot20 = (int)($resto / 20);
                $resto = $resto % 20;
        
                //Saque de 10 reais
                $tot10 = (int)($resto / 10);
                $resto %= 10;
        
                //Saque de 5 reais
                $tot5 = intdiv($resto, 5);
                $resto = $resto % 5;
        
                //Saque de 2 reais
                $tot2 = (int)($resto / 2);
                $resto %= 2;
                ?>
        <h2>Saque de R$ <?= number_format($saque, 2, ",", ".") ?> realizado</h2>
        <p> caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $tot100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $tot50 ?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x<?= $tot20 ?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $tot10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $tot5 ?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> x<?= $tot2 ?></li>
        </ul>
        
        <?php 
            }
        }

    ?>
    </section>
</body>
</html>