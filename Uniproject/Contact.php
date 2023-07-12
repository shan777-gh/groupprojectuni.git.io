<?php
    $servername="localhost";
    $username ="root";
    $password="";
    $database="group5pro";
    $conn=mysqli_connect($servername, $username, $password, $database);


    if(!$conn){
        echo " The Connection was not successful";
    }
   
    $name= $_POST['name'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_us`( `name`,`email`,`message`, `subject`) VALUES ('$name','$email','$message','$subject')";
    $result = mysqli_query( $conn, $sql);
    if($result){
        
    echo "Thanks for giving us Information";

}
else{

    echo "Error Occur During Execution";
}
    ?>


<?php

echo "<h2 align='center'> All Messages</h2>";
$sql=" SELECT `name`,`message` FROM `contact_us`";
$result = mysqli_query($conn, $sql);

?>
<table border ="1" align="center">
<tr bgcolor="blue">

    <th> Full Name </th>
    <th> Message</th>
</tr>

<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr align="center">
<td> <?php  echo $row[0]; ?> </td>
<td> <?php  echo $row[1]; ?> </td>
</tr>

<?php
}
?>
</table>
