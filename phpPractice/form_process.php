<?php // super global
    //$_POST used to store all the form data
    if(isset($_POST['submit'])){
        // echo "Username"; // can be Password, Username, or submit
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo "Hello" . $username;
        // echo "Your password is " . $password;
        $minimum = 5;
        $nameArray = ['edwin', 'simon', 'alex'];
        if(strlen($username) < $minimum){
            echo "username has to be longer than 3";
        }
        if(!in_array($username, $nameArray)){
            echo 'user is not exist';
        } else {
            echo 'welcome';
        }
    }
?>