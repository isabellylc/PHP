<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Estruturas de controle</title>
</head>
<body>
    <h1>Do While</h1>
    <p>Números pares até dez:</p>
 
    <?php
        $i = 2;
        do {
            echo $i. " , ";
            $i += 2;
        } while ($i <= 10);
    ?>
</body>
</html>