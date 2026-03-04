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
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="id1">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor">
            <label for="id2">*Notas disponíveis: R$100, R$50, R$10 e R$5</label>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$ realizado</h2>
        <?php 
            echo "O caixa eletrônico vai te entregar as seguintes notas:";
        ?>
    </section>
    
</body>
</html>