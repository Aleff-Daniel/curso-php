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
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="nas" id="nas">
            <label for="idade">Quer saber a sua idade em qual ano? Atualmente estamos em</label>
            <input type="number" name="atual" id="atual">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $nas = $_POST["nas"] ?? 0;
            $atual = $_POST["atual"] ?? 0;
            $resul = $atual - $nas;

            if ($nas > $atual) {
                echo "Não pode digitar um ano de nascimento maior do que o ano que deseja saber a idade!";
            }
            else {
                echo "Quem nasceu em $nas vai ter <strong>$resul anos</strong> em $atual!";
            } 
        ?>
    </section>
</body>
</html>