<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo com PHP</title>
</head>
<body>
    <h1>Saudação de acordo com o horário</h1>

    <?php
        date_default_timezone_set("America/Sao_Paulo");

        $hoje = date("d/m/Y");
        $agora = date("H:i");
        $hora = date("H");

        if ($hora >= 4 && $hora <= 12) {
            $mensagem = "Bom dia";
        } elseif ($hora >= 13 && $hora <= 18) {
            $mensagem = "Boa tarde";
        } else {
            $mensagem = "Boa noite";
        }

        echo "<h2>$mensagem!</h2>";
        echo "Hoje é dia " . $hoje . " e agora são " . $agora . " horas.";
    ?>
</body>
</html>
