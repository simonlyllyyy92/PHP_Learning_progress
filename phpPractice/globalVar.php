<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 'ouside'; //global
    function convert()
    {
        // if we want to change the value of a global variable inside a local function 
        // we need to use global definition

        global $x;
        $x = 'inside'; //local
    }

    echo $x;
    echo "<br>";
    convert();
    echo $x;

    ?>
</body>

</html>