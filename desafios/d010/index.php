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

        <?php 
        $atual = date("Y");
        $nas = $_POST["nas"] ?? 1920;
        $ano = $_POST["ano"] ?? $atual;
        ?>

        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="nas" id="nas" min="1920" max="<?= ($atual - 1)?>">
            <label for="idade">Quer saber a sua idade em qual ano? (Atualmente estamos em <strong><?= $atual ?></strong>)</label>
            <input type="number" name="ano" id="atual">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $resul = $ano - $nas;

            if ($nas > $ano) {
                echo "Não pode digitar um ano de nascimento maior do que o ano que deseja saber a idade!";
            }
            else if ($resul == 1){
                $nas == $ano;
                echo "Quem nasceu em $nas vai ter <strong>$resul ano</strong> em $ano!";
            }
            
            else {
                echo "Quem nasceu em $nas vai ter <strong>$resul anos</strong> em $ano!";
            } 
        ?>
    </section>
</body>
</html>