<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge".>
</head>
<body>
<?php
      
     
    $servername="localhost";
    $username ="root";
    $password="";
    $database="group5pro";

    $conn=mysqli_connect($servername, $username, $password, $database);
    if(!$conn){

        echo "Connection was not successful";
    }

      $email = $_POST['email'];
      $pass = $_POST['pass'];
      
      $sql =  "SELECT * FROM `user_signup` WHERE `email` =  '$email' and `password`= '$pass' ";
       $result = mysqli_query( $conn, $sql);
        $row = mysqli_num_rows($result);
       echo $row;
      
      
    if($row ==1) {
          echo "Successfully Login";
    }
    else{
          echo " Please enter valid login and password";
    }
?>
</body>
</html>
