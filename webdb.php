<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$z=$_POST['email'];
$a=$_POST['password'];
$b=$_POST['confirm-password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="table1";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
$sql = "INSERT INTO `db1`(`fname`, `lname`, `email`, `password`, `confirm-password`) VALUES ('$x','$y','$z','$a','$b')";
if($conn->query($sql)===TRUE){
    echo "  new record created successfully";
}
else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>