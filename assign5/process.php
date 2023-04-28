<?php

session_start();
print_r($_POST);

// create new array for user's quiz results
$new_row = array($_SESSION["username"],0,0,0,0,0,0,0,0,0,0,0,0);
$new_score = 0;
if (strtolower($_POST["q1"]) === "arrival") {
    $new_row[2] = 1;
    $new_score++;
}
if ($_POST["q2"] == "Sam Flynn") {
    $new_row[3] = 1;
    $new_score++;
}
if ($_POST["q3"] == "Rinzler") {
    $new_row[4] = 1;
    $new_score++;
}
if (isset($_POST["q4"])) {
    if ($_POST["q4"] === ["Tiger","Zebra","Orangutan","Hyena"]) {
        $new_row[5] = 1;
        $new_score++;
    }
}
if (strtolower($_POST["q5"]) === "dead poets society") {
    $new_row[6] = 1;
    $new_score++;
}
if ($_POST["q6"] == "Andrew Garfield") {
    $new_row[7] = 1;
    $new_score++;
}
if (isset($_POST["q7"])) {
    if ($_POST["q7"] === ["1999","2003","2021"]) {
        $new_row[8] = 1;
        $new_score++;
    }
}
if (strtolower($_POST["q8"]) === "braveheart") {
    $new_row[9] = 1;
    $new_score++;
}
if ($_POST["q9"] == "Miles Morales") {
    $new_row[10] = 1;
    $new_score++;
}
if ($_POST["q10"] == "Arrakis") {
    $new_row[11] = 1;
    $new_score++;
}
if (strtolower($_POST["q11"]) === "good will hunting") {
    $new_row[12] = 1;
    $new_score++;
}
$new_row[1] = round(($new_score / 11) * 100);


$path = "data.csv";
$handle = fopen($path, "r"); // open in readonly mode
$rows = [];
while (($row = fgetcsv($handle)) !== false) {
    $rows[] = $row;
}
fclose($handle);
// Remove the first one that contains headers
$headers = array_shift($rows);
// Combine the headers with each following row
$array = [];
foreach ($rows as $row) {
    $array[] = array_combine($headers, $row);
}

$userscore_exists = false;
foreach($array as $arr) {
    if ($arr["NAME"] === $_SESSION["username"]) {
        $userscore_exists = true;
        $arr = $new_row;
    }
}

if ($userscore_exists) {
    $rewrite = fopen($path, 'w');
    fputcsv($rewrite, $headers);
    foreach ($array as $arr) {
        if ($arr["NAME"] === $_SESSION["username"]) {
            fputcsv($rewrite, $new_row);
        } else {
            fputcsv($rewrite, $arr);
        }
    }
    fclose($rewrite);
} else {
    $append = fopen($path, 'a'); // open in write only mode (with pointer at the end of the file)
    fputcsv($append, $new_row);
    fclose($append);
}

print_r($new_row);

header("location: score.php");
exit;
?>