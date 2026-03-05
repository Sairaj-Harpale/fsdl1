<?php
session_start();

$conn = mysqli_connect("localhost","root","","fsdl4db");

if(!$conn){
die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT fullname,password FROM students WHERE email='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$row = mysqli_fetch_assoc($result);

if($password == $row['password']){

$_SESSION['username'] = $row['fullname'];

header("Location: welcome.php");
exit();

}else{

echo "Incorrect password";

}

}else{

echo "User not found";

}

}
?>