<?php
session_start();

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

$_SESSION["min"] = 100;
$_SESSION["max"] = 0;
$total = 0;
$q_scores = [0,0,0,0,0,0,0,0,0,0,0];
foreach ($array as $row) {
    if ($row["SCORE"] > $_SESSION["max"]) {
        $_SESSION["max"] = $row["SCORE"];
    }
    if ($row["SCORE"] < $_SESSION["min"]) {
        $_SESSION["min"] = $row["SCORE"];
    }
    $total += $row["SCORE"];
    $q_scores[0] += $row["Q1"];
    $q_scores[1] += $row["Q2"];
    $q_scores[2] += $row["Q3"];
    $q_scores[3] += $row["Q4"];
    $q_scores[4] += $row["Q5"];
    $q_scores[5] += $row["Q6"];
    $q_scores[6] += $row["Q7"];
    $q_scores[7] += $row["Q8"];
    $q_scores[8] += $row["Q9"];
    $q_scores[9] += $row["Q10"];
    $q_scores[10] += $row["Q11"];
    
}

$_SESSION["avg"] = round($total / count($array)) ;
$q_scores[0] = round(($q_scores[0] / count($array)) * 100);
$q_scores[1] = round(($q_scores[1] / count($array)) * 100);
$q_scores[2] = round(($q_scores[2] / count($array)) * 100);
$q_scores[3] = round(($q_scores[3] / count($array)) * 100);
$q_scores[4] = round(($q_scores[4] / count($array)) * 100);
$q_scores[5] = round(($q_scores[5] / count($array)) * 100);
$q_scores[6] = round(($q_scores[6] / count($array)) * 100);
$q_scores[7] = round(($q_scores[7] / count($array)) * 100);
$q_scores[8] = round(($q_scores[8] / count($array)) * 100);
$q_scores[9] = round(($q_scores[9] / count($array)) * 100);
$q_scores[10] = round(($q_scores[10] / count($array)) * 100);

$_SESSION["qscores"] = $q_scores;

$_SESSION["data"] = $array;

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Scores</title>
        <link rel="icon" type="image/x-icon" href="../Assets/images/p-logo.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="score.css">
    </head>
    <body>
        <?php include('header.php'); ?>

        <section class="p-5">
            <div class="card bg-dark text-light p-4 mx-auto" id="score-container" style="max-width: 800px; ">

                <div class="card-header text-center mb-4">
                    <div class="rating mx-auto mt-3"><?php echo $_SESSION["avg"] ?>%</div>
                    <h2 class="card-title display-3 mb-4" id="score" style="text-transform: uppercase;">Average Score</h2>
                    
                    <div class="d-flex justify-content-around">
                        <div class="">
                            <div class="rating"><?php echo $_SESSION["min"] ?>%</div>
                            <div class="display-5">MIN</div>
                        </div>
                        <div class="">
                            <div class="rating"><?php echo $_SESSION["max"] ?>%</div>
                            <div class="display-5">MAX</div>
                        </div>
                    </div>
                </div>
                    
                <div class="mx-auto mb-4" style="width: 500px;">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Question #1
                            </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][0] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][0] ?>%.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Question #2
                            </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][1] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][1] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Question #3
                            </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][2] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][2] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Question #4
                            </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][3] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][3] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Question #5
                            </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][4] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][4] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Question #6
                            </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][5] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][5] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Question #7
                            </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][6] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][6] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Question #8
                            </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][7] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][7] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Question #9
                            </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][8] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][8] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Question #10
                            </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][9] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][9] ?>%.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Question #11
                            </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div class="rating mx-auto my-3"><?php echo $_SESSION["qscores"][10] ?>%</div>
                                The average for this question was <?php echo $_SESSION["qscores"][10] ?>%.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center mb-3">
                    <table class="table text-light">
                        <thead>
                            <tr>
                            <th scope="col">USERNAME</th>
                            <th scope="col">SCORE</th>
                            <th scope="col">Q1</th>
                            <th scope="col">Q2</th>
                            <th scope="col">Q3</th>
                            <th scope="col">Q4</th>
                            <th scope="col">Q5</th>
                            <th scope="col">Q6</th>
                            <th scope="col">Q7</th>
                            <th scope="col">Q8</th>
                            <th scope="col">Q9</th>
                            <th scope="col">Q10</th>
                            <th scope="col">Q11</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $green = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-check-lg" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg>';
                            $red = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>';
                            foreach ($_SESSION["data"] as $row) {
                                echo 
                                '<tr>
                                <td>' . $row["NAME"] . '</td>
                                <td>' . $row["SCORE"] . '%</td>
                                <td>' . ($row["Q1"] ? $green : $red) . '</td>
                                <td>' . ($row["Q2"] ? $green : $red) . '</td>
                                <td>' . ($row["Q3"] ? $green : $red) . '</td>
                                <td>' . ($row["Q4"] ? $green : $red) . '</td>
                                <td>' . ($row["Q5"] ? $green : $red) . '</td>
                                <td>' . ($row["Q6"] ? $green : $red) . '</td>
                                <td>' . ($row["Q7"] ? $green : $red) . '</td>
                                <td>' . ($row["Q8"] ? $green : $red) . '</td>
                                <td>' . ($row["Q9"] ? $green : $red) . '</td>
                                <td>' . ($row["Q10"] ? $green : $red) . '</td>
                                <td>' . ($row["Q11"] ? $green : $red) . '</td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

        <script>
            // Find all rating items
            const ratings = document.querySelectorAll(".rating");

            // Iterate over all rating items
            ratings.forEach((rating) => {
            // Get content and get score as an int
            const ratingContent = rating.innerHTML;
            const ratingScore = parseInt(ratingContent, 10);

            // Define if the score is good, meh or bad according to its value
            const scoreClass =
                ratingScore < 50 ? "bad" : ratingScore < 70 ? "meh" : "good";

            // Add score class to the rating
            rating.classList.add(scoreClass);

            // After adding the class, get its color
            const ratingColor = window.getComputedStyle(rating).backgroundColor;

            // Define the background gradient according to the score and color
            const gradient = `background: conic-gradient(${ratingColor} ${ratingScore}%, transparent 0 100%)`;

            // Set the gradient as the rating background
            rating.setAttribute("style", gradient);

            // Wrap the content in a tag to show it above the pseudo element that masks the bar
            rating.innerHTML = `<span>${ratingScore} ${
                ratingContent.indexOf("%") >= 0 ? "<small>%</small>" : ""
            }</span>`;
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
