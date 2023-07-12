
<?php
    $servername="localhost";
    $username ="root";
    $password="";
    $database="group5pro";
    $conn=mysqli_connect($servername, $username, $password, $database);


    if(!$conn){
        echo " The Connection was not successful";
    }
    if(isset($_POST['save']))
    {
    
    $fname= $_POST['fname'];
      $lname= $_POST['lname'];
      $marks=$_POST['marks'];
      $course=$_POST['select'];
       $address=$_POST['address'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $photo=$_POST['photo'];
      
    $sql = "INSERT INTO `apply_intermediate`(`i_fname`,`i_lname`,`i_marks`,`i_course`,`i_address`,`i_email`,`i_phone`,`i_photo`) VALUES ('$fname','$lname','$marks','$course','$address', '$email', '$phone','$photo')";
    $result = mysqli_query( $conn, $sql );
    
    if($result){
        
    echo '<div class="alert alert-success"><H3>Your Form Has Been Submited for more info Contact us. </div> ';
}
else{

    echo "Error Occur During Execution";
}
    }
    ?>
    
