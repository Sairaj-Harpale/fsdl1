<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fsdl4db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Students Data</h2>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>Roll No</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["rollno"]."</td>
                <td>".$row["fullname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["password"]."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

$conn->close();
?>