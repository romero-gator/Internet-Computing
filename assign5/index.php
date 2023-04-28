<?php

// Initialize the session
session_start();

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movie Madness</title>
        <link rel="icon" type="image/x-icon" href="../Assets/images/p-logo.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

    </head>
    <body>
        <?php include('header.php'); ?>

        <section class="bg-dark text-light p-5 text-center">
            <div class="container">
                <h1 class="display-1">Welcome to the Ultimate Movie Quiz</h1>
                <p class="lead">This is going to test how well you know the movies you've spent countless hours watching</p>
            </div>
        </section>

        <section class="p-5">
            <div class="container text-center mb-5">
                <h2>Before you begin please enter your username</h2>
            </div>
            <form action="welcome.php" method="post" class="w-50 mx-auto" id="login">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="name" required>
                    <label for="username">Username</label>
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </section>

        <!-- <div class="text-center">
            <p>Copyright © 2023 Antonio Romero. All rights reserved.</p>
        </div> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>