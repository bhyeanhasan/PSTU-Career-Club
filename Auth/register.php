<?php
include '../Database_Operations/Connection.php';

$connection = new Connection();
$connect = $connection->Connect();


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$faculty = $_POST['faculty'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];


$sql = "INSERT INTO members (id, name, email, faculty, phone, gender, birthday,password) VALUES ('$id','$name','$email','$faculty','$phone','$gender','$birthday','$password')";



if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>