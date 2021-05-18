<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // if($username && $password){
        //     echo $username;
        //     echo "<br>";
        //     echo $password;
        // }else{
        //     echo 'User name or password can not be empty';
        // }

        // domain, defaultusername, defaultpassword, database name
        $connection = mysqli_connect('localhost', 'root', '', 'LoginApp');
        if($connection){
            echo 'connected to database';
        }else{
            die("Database connection failed");
        }

        $query = "INSERT INTO users(username, password)";
        //在已有的string上添加
        $query .="VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query Failed!' . mysqli_error($connection));
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
    <title>Document</title>
</head>
<body>
     <div class="container">
         <div class="col-sm-6">
             <form action="login_create.php" method="post">
                 <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" name="username" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" class="form-control">
                 </div>
                 <input class="btn btn-primary" type="submit" name="submit" value="Submit">
             </form>
         </div>
     </div>
</body>
</html>