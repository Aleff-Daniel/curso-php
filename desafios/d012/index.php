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
    $seconds = $_POST["sec"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="tot">Qual é o total de segundos?</label>
            <input type="number" name="sec" id="sec" min="0" step="1" value="<?= $seconds ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $semana = intdiv($seconds,604_800);
            $resto = $seconds % 604_800;
            $dia = intdiv($resto,86_400);
            $resto = $seconds % 86_400;
            $hora = intdiv($resto,3_600);
            $resto = $seconds % 3_600;
            $min = intdiv($resto,60);
            $resto = $seconds % 60;
            $sec = intdiv($resto, 1);
            
            echo "<p>Analisando o valor que você digitou, <strong>". number_format($seconds, "0", ",", ".")." segundos</strong> equivalem a um total de:</p>";

            echo "<ul>";

            if ($semana == 1) {
                echo "<li><p>$semana semana</li>";
            }
            else {
                echo "<li>$semana semanas</p></li>";
            }

            if ($dia == 1) {
                echo "<li><p>$dia dia</li>";
            }
            else {
                echo "<li>$dia dias</p></li>";
            }

            if ($hora == 1) {
                echo "<li><p>$hora hora</li>";
            }
            else {
                echo "<li>$hora horas</p></li>";
            }

            if ($min == 1) {
                echo "<li><p>$min minuto</li>";
            }
            else {
                echo "<li>$min minutos</p></li>";
            }
            if ($sec == 1) {
                echo "<li><p>$sec segundo</li>";
            }
            else {
                echo "<li>$sec segundos</p></li>";
            }

            echo "</ul>";

        ?>
    </section>
</body>
</html>