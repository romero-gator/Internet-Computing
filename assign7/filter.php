<?php

if(isset($_POST['request'])) {
    $request = $_POST['request'];

    $query = "SELECT * FROM movies";
    if ($request == "Title") {
        $query = $query . " ORDER BY title ASC";
    } else if ($request == "Genre") {
        $query = $query . " ORDER BY genre ASC";
    } else if ($request == "Year") {
        $query = $query . " ORDER BY year DESC";
    } else if ($request == "Length") {
        $query = $query . " ORDER BY length DESC";
    } else if ($request == "Director") {
        $query = $query . " ORDER BY director ASC";
    } else if ($request == "Budget") {
        $query = $query . " ORDER BY budget DESC";
    }

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

    if ($result = $conn->query($query)) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td><input class='form-check-input' type='radio' onclick='activateButton()' name='tableselect' value='". $row["id"] ."'></td><td>" . $row["title"] . "</td><td>" . $row["year"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["length"] . " mins</td><td>" . $row["director"] . "</td><td>$ " . $row["budget"] . "</td></tr>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}

?>