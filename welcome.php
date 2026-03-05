<?php
session_start();

if(!isset($_SESSION['username'])){
header("Location:index.html");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<style>
body{
font-family: Arial;
background:#d8f3f0;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
background:white;
padding:40px;
border-radius:10px;
text-align:center;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

button{
padding:10px 20px;
background:#2b6cff;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}
</style>

</head>

<body>

<div class="container">

<h1>Welcome, <?php echo $_SESSION['username']; ?> 🎉</h1>

<p>You have successfully logged in.</p>

<a href="logout.php">
<button>Logout</button>
</a>

</div>

</body>
</html>