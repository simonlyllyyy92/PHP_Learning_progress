<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function echo_something() {
            echo "Hello";
        }
        echo_something();
        function echo_something_withParams($content){
            echo $content;
        }
        echo_something_withParams('Hi');
    ?>
</body>
</html>