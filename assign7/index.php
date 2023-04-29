
<?php
	error_reporting(E_ALL);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assignment 6</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script>
            function activateButton() {
                document.getElementById("rmbutton").disabled = false;
                document.getElementById("editbutton").disabled = false;
            }
            function removeEntry() {
                document.getElementById("db").action = "remove.php";
                document.getElementById("db").submit();
            }
            function editEntry() {
                document.getElementById("db").action = "edit.php";
                document.getElementById("db").submit();
            }
        </script>
    </head>
    <body>
        <?php include('header.php'); ?>

        <section class="bg-dark text-light p-5 text-center">
            <div class="container">
                <h1 class="display-1">Welcome To The Best 21st Century Movies Archive</h1>
                <p class="lead">Below is a database filled with some of my favorite movies of the 21st Century, feel free to add your own favorites using the form below</p>
            </div>
        </section>

        <section class="p-5">
            <form action="process.php" method="post" class="mx-auto" id="addentry" style="max-width: 900px;">
                <label>Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Super cool movie" required>

                <label class="mt-3">Genre:</label>
                <div class="row">
                    <div class="col-md">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Action" required>
                            <label class="form-check-label">Action</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Adventure">
                            <label class="form-check-label">Adventure</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Animation">
                            <label class="form-check-label">Animation</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Comedy">
                            <label class="form-check-label">Comedy</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Drama">
                            <label class="form-check-label">Drama</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Horror">
                            <label class="form-check-label">Horror</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Romance">
                            <label class="form-check-label">Romance</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Sci-Fi">
                            <label class="form-check-label">Sci-Fi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Thriller">
                            <label class="form-check-label">Thriller</label>
                        </div>
                    </div>
                </div>

                <label class="mt-3">Year Released:</label>
                <select class="form-select" name="year" id="year" required>
                    <option selected disabled>Select</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                </select>

                <label class="mt-3">Length of the movie (in minutes):</label>
                <input type="text" class="form-control" id="length" name="length" placeholder="120" required>
                
                <label class="mt-3">Director:</label>
                <input type="text" class="form-control" id="director" name="director" placeholder="John Smith" required>
                
                <label class="mt-3">Budget (in USD):</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" id="budget" name="budget" placeholder="1000000" required>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="reset" class="btn btn-danger me-md-2">RESET</button>
                    <button type="submit" class="btn btn-success">ADD</button>
                </div>
            </form>
        </section>

        <section class="p-5">
            <div class="container text-center mb-3">
                <h2>The 21st Century Movie Database</h2>
            </div>
            <div class="d-flex align-items-center mb-2">
                <label class="p-2">Filter by:</label>
                <select class="form-select form-select-sm w-25" name="filter" id="filter">
                    <option selected disabled>Select</option>
                    <option value="Title">Title</option>
                    <option value="Genre">Genre</option>
                    <option value="Year">Year</option>
                    <option value="Length">Length</option>
                    <option value="Director">Director</option>
                    <option value="Budget">Budget</option>
                </select>
            </div>
            
            <form action method="get" id="db">
            <table class="table table-hover" id="dbtable">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Year</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Length</th>
                    <th scope="col">Director</th>
                    <th scope="col">Budget</th>
                    </tr>
                </thead>
                <tbody id="dbbody">
                <?php
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

                    $query = "SELECT * FROM movies";
                    if ($result = $conn->query($query)) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td><input class='form-check-input' type='radio' onclick='activateButton()' name='tableselect' value='". $row["id"] ."'></td><td>" . $row["title"] . "</td><td>" . $row["year"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["length"] . " mins</td><td>" . $row["director"] . "</td><td>$ " . $row["budget"] . "</td></tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                ?>
                </tbody>
            </table>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-danger me-md-2" onclick="removeEntry()" id="rmbutton" disabled>REMOVE</button>
                <button type="button" class="btn btn-primary" onclick="editEntry()" id="editbutton" disabled>EDIT</button>
            </div>
            </form>
        </section>

        <div class="text-center">
            <p>Copyright © 2023 Antonio Romero. All rights reserved.</p>
        </div>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $("#filter").on('change',function(){
                    var filterCategory = $(this).val();

                    $.ajax({
                        url: "filter.php",
                        type: "POST",
                        data: 'request=' + filterCategory,
                        success:function(data){
                            $("#dbbody").html(data);
                        }      
                    })
                });
            })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>