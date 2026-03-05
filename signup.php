<?php

$conn = mysqli_connect("localhost","root","","fsdl4db");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['signup'])){

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students (fullname,email,phone,password)
            VALUES ('$name','$email','$phone','$password')";

    if(mysqli_query($conn,$sql)){
        
        echo "<script>
                alert('Registration Successful');
                window.location='index.html';
              </script>";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>