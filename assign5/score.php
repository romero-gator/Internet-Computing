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

$userscore_exists = false;
foreach($array as $arr) {
    if ($arr["NAME"] === $_SESSION["username"]) {
        $userscore_exists = true;
        $_SESSION["results"] = $arr;
    }
}

$_SESSION["quiztaken"] = $userscore_exists;

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Score</title>
        <link rel="icon" type="image/x-icon" href="../Assets/images/p-logo.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="score.css">
        
    </head>
    <body>
        <?php include('header.php'); ?>

        <section class="p-5">
            <div class="text-center mx-auto <?php if($_SESSION["quiztaken"]){echo "d-none";} ?>" style="max-width: 1000px;">
                <h1 class="display-2">Whoops! It looks like you haven't taken the quiz yet...</h1>
                <p class="lead">Submit the quiz to get a score.</p>
                <a href="/quiz.php" class="btn btn-primary btn-lg" role="button">Take the quiz</a>
            </div>
        
            <div class="card bg-dark text-light p-3 mx-auto <?php if(!$_SESSION["quiztaken"]){echo "d-none";} ?>" id="score-container" style="max-width: 800px;">
                <div class="rating mx-auto mt-3"><?php echo $_SESSION["results"]["SCORE"]; ?>%</div>
                
                <div class="card-body">
                    <div class="card-header text-center mb-4">
                        <h2 class="card-title display-4" id="score" style="text-transform: uppercase;"><?php if($_SESSION["results"]["SCORE"] == 100){echo "PERFECT!";} else if($_SESSION["results"]["SCORE"] >= 85){echo "FANTASTIC!";}else if($_SESSION["results"]["SCORE"] >= 70){echo "GREAT JOB!";}else if ($_SESSION["results"]["SCORE"] >= 50){echo "GOOD EFFORT!";} else {echo "BETTER LUCK NEXT TIME!";} ?></h2>
                        <p class="lead mb-2" id="species"><?php echo $_SESSION["results"]["NAME"]; ?></p>
                    </div>
                    
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Question #1
                            </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="<?php if(!$_SESSION["results"]["Q1"]){echo "d-none";} ?>">You got it right! That scene captures the inside of the mysterious alien spacecraft that touched down on Earth. The scientists in orange attempt to communicate with the aliens in this room.</div>
                                <div class="<?php if($_SESSION["results"]["Q1"]){echo "d-none";} ?>">You got it wrong... You might be thinking of a different movie. Here's a hint: Amy Adams and Jeremy Renner star in this alien encounter.</div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q2"]){echo "d-none";} ?>">You got it right! This scene shows Sam Flynn going face to face with an opponent in the Game Arena in Tron City where gladiator style events take place like disc battles or light cycle races.</div>
                                <div class="<?php if($_SESSION["results"]["Q2"]){echo "d-none";} ?>">You got it wrong... You might be thinking of another character. Here's a hint: the character pictured is the son of Kevin, the software developer who worked for ENCOM and worked on creating and exploring the world of Tron.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q3"]){echo "d-none";} ?>">You got it right! Rinzler is actually a villanous version of Tron who was reprogrammed by Clu to be his primary enforcer.</div>
                                <div class="<?php if($_SESSION["results"]["Q3"]){echo "d-none";} ?>">You got it wrong... This one is tricky. Think about the true identity of this character. Here's a hint: he was manipulated into being a villain.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q4"]){echo "d-none";} ?>">You got it right! Each animal represents a different person from the ship including a cook, sailor, Richard Parker, and Pi's mother.</div>
                                <div class="<?php if($_SESSION["results"]["Q4"]){echo "d-none";} ?>">You got it wrong... Each animal represents a different person from the ship. Here's a hint: there were four animals that esacped onto the lifeboat with Pi.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q5"]){echo "d-none";} ?>">You got it right! This movie is very inspirational and the scene shown exhibits the unorthodox teaching methods Robin Williams' character used to inspire and teach his students.</div>
                                <div class="<?php if($_SESSION["results"]["Q5"]){echo "d-none";} ?>">You got it wrong... Think about why they are standing on desks. Here's a hint that may help: this movie starred Robin Williams as an English teacher who guides a class of young men as they explore life and who they are.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q6"]){echo "d-none";} ?>">You got it right! Andrew Garfield is very good at portraying Spider-Man's physical abilities including web-swinging, climbing, and hand-to-hand combat.</div>
                                <div class="<?php if($_SESSION["results"]["Q6"]){echo "d-none";} ?>">You got it wrong... All three actors have a unique way that they portray Peter Parker and the Spider-Man. Here's a hint that may help you identify this actor: his version of Spider-Man is appreciated for his web-swinging and other physical abilities.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q7"]){echo "d-none";} ?>">You got it right! The first movie was released in 1999 followed by the second and third movies in 2003 and finally the most recent movie was released in 2021.</div>
                                <div class="<?php if($_SESSION["results"]["Q7"]){echo "d-none";} ?>">You got it wrong... This one is tricky. Here's a hint that may help: two of the four movies were released in the same year.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q8"]){echo "d-none";} ?>">You got it right! This scene is from Braveheart is an epic historical drama that tells the story of a Scottish warrior, Sir William Wallace, leading the Scots in the first war of Scottish independence against King Edward I of England.</div>
                                <div class="<?php if($_SESSION["results"]["Q8"]){echo "d-none";} ?>">You got it wrong... Here's a hint: this epic movie stars Mel Gibson as Sir William Wallace, a brave Scottish warrior who leads the Scots in the first war of Scottish independence.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q9"]){echo "d-none";} ?>">You got it right! This movie has awesome animation styles which incorporate comic book styled art and animations. This movie also featured lots of Spider-Man characters from different universes.</div>
                                <div class="<?php if($_SESSION["results"]["Q9"]){echo "d-none";} ?>">You got it wrong... This one is tricky because there were lots of Spider-Man characters in this movie coming from different universes.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q10"]){echo "d-none";} ?>">You got it right! Arrakis is a desolate desert planet that is known for its valuable resource, melange aka spice, which is useful for many things in the Dune world.</div>
                                <div class="<?php if($_SESSION["results"]["Q10"]){echo "d-none";} ?>">You got it wrong... Here's a hint: This planet is a desolate desert planet that is known for its valuable resource, melange aka spice, which is useful for many thing in the Dune world.</div>
                            </div>
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
                                <div class="<?php if(!$_SESSION["results"]["Q11"]){echo "d-none";} ?>">You got it right! This movie tells the touching tale of a wayward young man who struggles to find his identity, living in a world where he can solve any problem, except the one brewing deep within himself, until one day he meets his soul mate who opens his mind and his heart.</div>
                                <div class="<?php if($_SESSION["results"]["Q11"]){echo "d-none";} ?>">You got it wrong... Here's a hint that may help: this movie features Matt Damon and Robin Williams. Matt Damon's character is wicked smart.</div>
                            </div>
                            </div>
                        </div>
                    </div>
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
