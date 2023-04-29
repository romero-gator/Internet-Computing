<?php
print_r($_POST);

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

// protect against SQL injection attacks
$title = $conn->real_escape_string($_POST['title']);
$genre = $conn->real_escape_string($_POST['genre']);
$year = $conn->real_escape_string($_POST['year']);
$length = $conn->real_escape_string($_POST['length']);
$director = $conn->real_escape_string($_POST['director']);
$budget = $conn->real_escape_string($_POST['budget']);

$query = "INSERT INTO movies (title, genre, year, length, director, budget) VALUES ('{$title}','{$genre}','{$year}','{$length}','{$director}','{$budget}')";

$conn->query($query);
$conn->close();

header("location: index.php");
exit;
?>