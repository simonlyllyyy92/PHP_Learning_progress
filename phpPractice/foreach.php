<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = [1, 2, 3, 'number4' => 4];

        foreach($numbers as $number){
            echo $number;
        };
    ?>
</body>
</html>