<html>
<head>
    <title>Estruturas de controle</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>switch / case</h1>
    O valor é
    <?php
        $valor = 1;
        switch ($valor) {
            case 1:
                echo "um";
                break;
            case 2:
                echo "dois";
                break;
            case 3:
                echo "três";
                break;
            default:
                echo "não sei!";
        }
    ?>
</body>
</html>
