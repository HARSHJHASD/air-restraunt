<?php
$servername = "sdb-b.hosting.stackcp.net";
$username = "porosh";
$password = "Ibqy$2^Zf,X]";
$dbname = "porosh-3136398471";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connection Successful";
}
//Create database
$sql = "CREATE DATABASE porosh";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
