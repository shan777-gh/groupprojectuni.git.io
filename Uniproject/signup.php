<?php
    $servername="localhost";
    $username ="root";
    $password="";
    $database="group5pro";
    $conn=mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        echo "Connection was not successful";
    }
   
      
      $email= $_POST['email'];
      
      $Username= $_POST['Username'];
    
      $pass = $_POST['pass'];
    
      $phno = $_POST['phno'];
   
      $Addres = $_POST['Addres'];
     
      $Zip = $_POST['Zip'];


      $sql=" INSERT INTO `user_signup`( `username`, `password`, `email`, `phoneno`, `address`, `zipcode`) VALUES ('$Username','$pass','$email','$phno','$Addres','$Zip');";
      $result=mysqli_query( $conn, $sql);
     
      echo "Records added succesfully";
?>
</body>
</html>
