<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','text');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into sammani(name,email,message) values( ?, ?, ?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "Sent message successfully...";
    $stmt->close();
    $conn->close();
}
?>
