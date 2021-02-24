<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $number = 10;
        echo $number;

        define("NAME", 1000); // same as  const NAME = 2000;
        const TEST =  1000;// same as above
        // const variable can't be changed
        echo NAME; // echo a const  does not need $ sign
        echo TEST;
    ?>
    
</body>
</html>