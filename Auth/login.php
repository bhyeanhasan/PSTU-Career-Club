<?php
session_start();
include '../Database_Operations/Connection.php';

$connection = new Connection();
$connect = $connection->Connect();

$user = $_POST['user'];
$password =$_POST['password'];


$sql = "SELECT * FROM members";

$result = mysqli_query($connect, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

while ($row = mysqli_fetch_array($result))
{

    if(($user == $row['email'] || $user==$row['id']) && $password == $row['password'] )
    {
        $_SESSION['user'] = $row['name'];
        $_SESSION['id'] = $row['id'];

    }

}
$connect->close();

if(isset($_SESSION['id']))
{
    header("Location: ../index.php");
}else{
    $_SESSION['error'] = 'Incorrect username or password';
    header("Location:../Pages/login_page.php");
}


?>