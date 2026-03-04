<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        if (isset($_GET["numero"])) {
            $numero = (int) $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O Número escolhido foi o $numero<br>";
            echo "O seu antecessor é  $antecessor<br>";
            echo "O seu sucessor é $sucessor<br>";
            } else {
                echo "Nenhum número foi informado.";}
        ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>
</html>