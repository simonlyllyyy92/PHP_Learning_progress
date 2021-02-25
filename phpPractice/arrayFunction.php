<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $list =  [1, 2, 3, 4, 5];
        echo max($list); // maximum value within array
        echo "<br>";
        echo min($list); // minimum 
        echo "<br>";
        print_r($list);//pint index and value
        echo "<br>";
        sort($list); // sort the array

    ?>
</body>
</html>