
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
    
    $name= $_POST['Name'];
    $email = $_POST['Email'];
    $comment = $_POST['Comment'];

 
    $sql = "INSERT INTO `blog_comment`( `name`,`email`,`comment`) VALUES ('$name','$email','$comment')";
    $result = mysqli_query( $conn, $sql);
    if($result){
        
    echo '<div class="alert alert-success">  >Thanks for giving us feedback </div> ';
}
else{

    echo "Error Occur During Execution";
}
    }
    ?>


