<?php
print_r($_GET['tableselect']);

// mysql connection configuration information
// NOTE: the commented out values below are for configuring with the local device I used
//       I was not able to get the UF server MySQL database working...
$host = "mysql.cise.ufl.edu"; // "localhost";
$username = "antonioromero"; // "root";
$password = "123database"; // "";
$database = "Assignment6MoviesRomero"; // "assignment6";

// Create connection
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id = $conn->real_escape_string($_GET['tableselect']);

$query = "SELECT * FROM movies where id = '{$id}'";

if ($result = $conn->query($query)) {
    while($row = $result->fetch_assoc()) {
        echo " ". $row["id"] ." " . $row["title"] . " " . $row["year"] . " " . $row["genre"] . " " . $row["length"] . " " . $row["director"] . " " . $row["budget"];
        $title = $row['title'];
        $genre = $row['genre'];
        $year = $row['year'];
        $length = $row['length'];
        $director = $row['director'];
        $budget = $row['budget'];
    }
} else {
    $conn->close();
    header("location: index.php");
    exit;
}

$conn->close();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assignment 6</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script>
            function cancelEditEntry() {
                window.location.replace("./index.php");
            }
        </script>
    </head>
    <body>
        <?php include('header.php'); ?>

        <section class="bg-dark text-light p-5 text-center">
            <div class="container">
                <h1 class="display-1">Database Entry Editor</h1>
                <p class="lead">Edit the selected database entry using the form below</p>
            </div>
        </section>

        <section class="p-5">
            <form action="update.php" method="post" class="mx-auto" id="addentry" style="max-width: 900px;">
                <label>Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $GLOBALS['title']; ?>" required>

                <label class="mt-3">Genre:</label>
                <div class="row">
                    <div class="col-md">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Action" required <?php if($GLOBALS['genre'] == 'Action'){ echo "checked"; } ?>>
                            <label class="form-check-label">Action</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Adventure" <?php if($GLOBALS['genre'] == 'Adventure'){ echo "checked"; } ?>>
                            <label class="form-check-label">Adventure</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Animation" <?php if($GLOBALS['genre'] == 'Animation'){ echo "checked"; } ?>>
                            <label class="form-check-label">Animation</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Comedy" <?php if($GLOBALS['genre'] == 'Comedy'){ echo "checked"; } ?>>
                            <label class="form-check-label">Comedy</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Drama" <?php if($GLOBALS['genre'] == 'Drama'){ echo "checked"; } ?>>
                            <label class="form-check-label">Drama</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Horror" <?php if($GLOBALS['genre'] == 'Horror'){ echo "checked"; } ?>>
                            <label class="form-check-label">Horror</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Romance" <?php if($GLOBALS['genre'] == 'Romance'){ echo "checked"; } ?>>
                            <label class="form-check-label">Romance</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Sci-Fi" <?php if($GLOBALS['genre'] == 'Sci-Fi'){ echo "checked"; } ?>>
                            <label class="form-check-label">Sci-Fi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Thriller" <?php if($GLOBALS['genre'] == 'Thriller'){ echo "checked"; } ?>>
                            <label class="form-check-label">Thriller</label>
                        </div>
                    </div>
                </div>

                <label class="mt-3">Year Released:</label>
                <select class="form-select" name="year" id="year" required>
                    <option disabled>Select</option>
                    <option value="2023" <?php if($GLOBALS['year'] == '2023'){ echo "selected"; } ?>>2023</option>
                    <option value="2022" <?php if($GLOBALS['year'] == '2022'){ echo "selected"; } ?>>2022</option>
                    <option value="2021" <?php if($GLOBALS['year'] == '2021'){ echo "selected"; } ?>>2021</option>
                    <option value="2020" <?php if($GLOBALS['year'] == '2020'){ echo "selected"; } ?>>2020</option>
                    <option value="2019" <?php if($GLOBALS['year'] == '2019'){ echo "selected"; } ?>>2019</option>
                    <option value="2018" <?php if($GLOBALS['year'] == '2018'){ echo "selected"; } ?>>2018</option>
                    <option value="2017" <?php if($GLOBALS['year'] == '2017'){ echo "selected"; } ?>>2017</option>
                    <option value="2016" <?php if($GLOBALS['year'] == '2016'){ echo "selected"; } ?>>2016</option>
                    <option value="2015" <?php if($GLOBALS['year'] == '2015'){ echo "selected"; } ?>>2015</option>
                    <option value="2014" <?php if($GLOBALS['year'] == '2014'){ echo "selected"; } ?>>2014</option>
                    <option value="2013" <?php if($GLOBALS['year'] == '2013'){ echo "selected"; } ?>>2013</option>
                    <option value="2012" <?php if($GLOBALS['year'] == '2012'){ echo "selected"; } ?>>2012</option>
                    <option value="2011" <?php if($GLOBALS['year'] == '2011'){ echo "selected"; } ?>>2011</option>
                    <option value="2010" <?php if($GLOBALS['year'] == '2010'){ echo "selected"; } ?>>2010</option>
                    <option value="2009" <?php if($GLOBALS['year'] == '2009'){ echo "selected"; } ?>>2009</option>
                    <option value="2008" <?php if($GLOBALS['year'] == '2008'){ echo "selected"; } ?>>2008</option>
                    <option value="2007" <?php if($GLOBALS['year'] == '2007'){ echo "selected"; } ?>>2007</option>
                    <option value="2006" <?php if($GLOBALS['year'] == '2006'){ echo "selected"; } ?>>2006</option>
                    <option value="2005" <?php if($GLOBALS['year'] == '2005'){ echo "selected"; } ?>>2005</option>
                    <option value="2004" <?php if($GLOBALS['year'] == '2004'){ echo "selected"; } ?>>2004</option>
                    <option value="2003" <?php if($GLOBALS['year'] == '2003'){ echo "selected"; } ?>>2003</option>
                    <option value="2002" <?php if($GLOBALS['year'] == '2002'){ echo "selected"; } ?>>2002</option>
                    <option value="2001" <?php if($GLOBALS['year'] == '2001'){ echo "selected"; } ?>>2001</option>
                    <option value="2000" <?php if($GLOBALS['year'] == '2000'){ echo "selected"; } ?>>2000</option>
                </select>

                <label class="mt-3">Length of the movie (in minutes):</label>
                <input type="text" class="form-control" id="length" name="length" value="<?php echo $GLOBALS['length']; ?>" required>
                
                <label class="mt-3">Director:</label>
                <input type="text" class="form-control" id="director" name="director" value="<?php echo $GLOBALS['director']; ?>" required>
                
                <label class="mt-3">Budget (in USD):</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" id="budget" name="budget" value="<?php echo $GLOBALS['budget']; ?>" required>
                </div>

                <div style="display: none;">
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $GLOBALS['id']; ?>">
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" onclick="cancelEditEntry()" class="btn btn-danger me-md-2">CANCEL</button>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>