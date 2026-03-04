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
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="tot">Qual é o total de segundos?</label>
            <input type="number" name="sec" id="sec">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $seconds = $_POST["sec"] ?? 0;
            $min = $seconds / 60;
            $hora = $min / 60;
            $dia = $hora / 24;
            $semana = $dia / 7;

            echo "<p>Analisando o valor que você digitou, <strong>$seconds segundos</strong> equivalem a um total de:</p>";

            if ($semana == 1) {
                echo "<p>$semana semana";
            }
            else {
                echo "$semana semanas</p>";
            }

            if ($dia == 1) {
                echo "<p>$dia dia";
            }
            else {
                echo "$dia dias</p>";
            }

            if ($hora == 1) {
                echo "<p>$hora hora";
            }
            else {
                echo "$hora horas</p>";
            }

            if ($min == 1) {
                echo "<p>$min minuto";
            }
            else {
                echo "$min minutos</p>";
            }

        ?>
    </section>
</body>
</html>