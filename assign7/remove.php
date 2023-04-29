<?php
print_r($_GET);

// mysql connection configuration information
// NOTE: the commented out values below are for configuring with the local device I used
//       I was not able to get the UF server MySQL database working...
$host = "localhost"; // "localhost"; "mysql.cise.ufl.edu";
$username = "root"; // "root"; "antonioromero";
$password = ""; // ""; "123database";
$database = "assignment6"; // "assignment6"; "Assignment6MoviesRomero";

// Create connection
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $conn->real_escape_string($_GET['tableselect']);

$query = "DELETE from movies where id = '{$id}'";

$conn->query($query);
$conn->close();

header("location: index.php");
exit;
?>