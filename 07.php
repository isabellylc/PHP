<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funções</title>
</head>
<body>
    <h1>Funções</h1>
 
    <?php
        function soma($i, $j) {
            $k = $i + $j;
            return $k;
        }
 
        $res = soma(4, 5);
        echo "O resultado é " . $res;
    ?>
</body>
</html>