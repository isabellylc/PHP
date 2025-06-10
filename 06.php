<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Estruturas de controle</title>
</head>
<body>
    <h1>Foreach</h1>
    <p>Números pares até dez:</p>
 
    <?php
        $n = array(2, 4, 6, 8, 10);
 
        foreach ($n as $i) {
            echo $i . ", ";
        }
    ?>
</body>
</html>