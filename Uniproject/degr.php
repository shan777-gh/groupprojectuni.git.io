
<?php
    $servername="localhost";
    $username ="root";
    $password="";
    $database="group5pro";
    $conn=mysqli_connect($servername, $username, $password, $database);


    if(!$conn){
        echo " The Connection was not successful";
    }
    if(isset($_POST['saves']))
    {
    
    $fname1= $_POST['fname1'];
      $lname1= $_POST['lname1'];
      $marks1=$_POST['marks1'];
      $pro1=$_POST['select1'];
       $deg1=$_POST['select2'];
       $address1=$_POST['address1'];
       $email1=$_POST['email1'];
       $phone1=$_POST['phone1'];
       $photo1=$_POST['photo1'];
    
    $sql = "INSERT INTO `app_degree`(`d_fname`,`d_lname`,`d_marks`,`d_program`,`d_degree`,`d_address`,`d_email`,`d_phone`,`d_photo`) VALUES ('$fname1','$lname1','$marks1','$pro1','$deg1','$address1', '$email1', '$phone1','$photo1')";
    $result = mysqli_query( $conn, $sql);
    if($result){
        
    echo '<div class="alert alert-success"><H3>Your Form Has Been Submit for visiting for more info contact us. </div> ';
}
else{

    echo "Error Occur During Execution";
}
    }
    ?>
    
