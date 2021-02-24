<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $x = 'outside';
    function convert(){
        global $x; // if no global def here, $x will be priting out 2 times of 'outside'  having global here means we can change the global variables
        $x = 'inside';
    }
    // If no 
    echo $x;
    echo "<br>";
    convert();
    echo $x
?>
    
</body>
</html>