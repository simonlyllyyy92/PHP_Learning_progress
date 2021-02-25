<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo rand(1, 100) . "<br>";

        $string = 'TestLength';
        echo strlen($string) . "<br>";

        $array = [1, 3, 4, 2, 5];
        sort($array);
        print_r($array) . "<br>";
        echo "<br>";
        $found = in_array(1, $array);
        if($found) {
            echo $found . "<br>";
            echo 'found';
        }
    ?>
</body>
</html>