<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combinando dois arrays</title>

</head>
<body>
    <h2>Combinando arrays</h2>
    <?php

    $array = [1, 2, 3, 4, 5];   
    $array2 = [6, 7, 8, 9, 10];
    $array3 = array_merge($array, $array2);
    echo "Array 1: ";
    print_r($array);
    echo "<br>";
    echo "Array 2: ";
    print_r($array2);
    echo "<br>";
    echo "Array 3: ";
    print_r($array3);
    echo "<br>";
    ?>

</body>
</html>