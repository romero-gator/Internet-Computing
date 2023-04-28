<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quiz</title>
        <link rel="icon" type="image/x-icon" href="../Assets/images/p-logo.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <script src="functions.js"></script>
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
            <form action="process.php" method="post" class="mx-auto" id="quiz" style="max-width: 900px;">
                <div class="mb-5" id="Q1">
                    <img src="./Assets/arrival.jpeg" class="img-fluid mb-2">
                    <h3>1) What movie is this scene from?</h3>
                    <input type="text" class="form-control" id="q1" name="q1" placeholder="Movie title" required>
                </div>

                <img src="/Assets/tron.jpeg" class="img-fluid">
                <div class="d-flex justify-content-between mb-5" id="Q23">
                    <div>
                        <h3>2) Who is on the left?</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2" value="Tron" required>
                            <label class="form-check-label" for="q2">Tron</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2" value="Sam Flynn">
                            <label class="form-check-label" for="q2">Sam Flynn</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2" id="q2" value="Zuse">
                            <label class="form-check-label" for="q2">Zuse</label>
                        </div>
                    </div>

                    <div>
                        <h3>3) Who is on the right?</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3" value="Quorra" required>
                            <label class="form-check-label" for="q3">Quorra</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3" value="Clu">
                            <label class="form-check-label" for="q3">Clu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3" id="q3" value="Rinzler">
                            <label class="form-check-label" for="q3">Rinzler</label>
                        </div>
                    </div>
                </div>

                <div class="mb-5" id="Q4">
                    <img src="/Assets/lifeofpi.jpeg" class="img-fluid">
                    <h3>4) In The Life of Pi, which animals escape onto the lifeboat with Pi?</h3>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q4[]" value="Tiger">
                                <label class="form-check-label">Tiger</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q4[]" value="Lion">
                                <label class="form-check-label">Lion</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q4[]" value="Zebra">
                                <label class="form-check-label">Zebra</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q4[]" value="Orangutan">
                                <label class="form-check-label">Orangutan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q4[]" value="Panda">
                                <label class="form-check-label">Panda</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q4[]" value="Hyena">
                                <label class="form-check-label">Hyena</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5" id="Q5">
                    <h3>5) What movie is this scene from?</h3>
                    <img src="./Assets/deadpoetssociety.avif" class="img-fluid mb-2">
                    <input type="text" class="form-control" id="q5" name="q5" placeholder="Movie title" required>
                </div>

                <img src="./Assets/amazingspiderman.jpeg" class="img-fluid">
                <div class="col mb-5" id="Q6">
                    <h3>6) What actor plays Spider-Man in The Amazing Spider-Man?</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="q6" value="Tobey Maguire" required>
                        <label class="form-check-label" for="q6">Tobey Maguire</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="q6" value="Tom Holland">
                        <label class="form-check-label" for="q6">Tom Holland</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="q6" value="Andrew Garfield">
                        <label class="form-check-label" for="q6">Andrew Garfield</label>
                    </div>
                </div>

                <div class="mb-5" id="Q7">
                    <img src="/Assets/matrix.webp" class="img-fluid">
                    <h3>7) In which of the following years was a Matrix movie released?</h3>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q7[]" value="1998">
                                <label class="form-check-label">1998</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q7[]" value="1999">
                                <label class="form-check-label">1999</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q7[]" value="2001">
                                <label class="form-check-label">2001</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q7[]" value="2003">
                                <label class="form-check-label">2003</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q7[]" value="2020">
                                <label class="form-check-label">2020</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="q7[]" value="2021">
                                <label class="form-check-label">2021</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5" id="Q8">
                    <h3>8) What movie is this scene from?</h3>
                    <img src="./Assets/braveheart.jpeg" class="img-fluid mb-2">
                    <input type="text" class="form-control" id="q8" name="q8" placeholder="Movie title" required>
                </div>

                <img src="./Assets/spiderman.webp" class="img-fluid">
                <div class="mb-5" id="Q9">
                    <h3>9) What is the pictured Spider-Man's true identity?</h3>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="q9" value="Peter Parker" required>
                                <label class="form-check-label" for="q9">Peter Parker</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="q9" value="Miles Morales">
                                <label class="form-check-label" for="q9">Miles Morales</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" id="q9" value="Miguel O'Hara">
                                <label class="form-check-label" for="q9">Miguel O'Hara</label>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="./Assets/dune.webp" class="img-fluid">
                <div class="mb-5" id="Q10">
                    <h3>10) What fictional planet does Dune take place on?</h3>
                    <select class="form-select" name="q10" id="q10" required>
                        <option selected disabled>Select</option>
                        <option value="Alderaan">Alderaan</option>
                        <option value="Arrakis">Arrakis</option>
                        <option value="Asgard">Asgard</option>
                        <option value="Coruscant">Coruscant</option>
                        <option value="Dagobah">Dagobah</option>
                        <option value="Hoth">Hoth</option>
                        <option value="Jakku">Jakku</option>
                        <option value="Krypton">Krypton</option>
                        <option value="Mustafar">Mustafar</option>
                        <option value="Naboo">Naboo</option>
                        <option value="Pandora">Pandora</option>
                        <option value="Tatooine">Tatooine</option>
                    </select>
                </div>

                <div class="mb-5" id="Q11">
                    <h3>11) What movie is this scene from?</h3>
                    <img src="./Assets/goodwillhunting.jpeg" class="img-fluid mb-2">
                    <input type="text" class="form-control" id="q11" name="q11" placeholder="Movie title" required>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="reset" class="btn btn-danger me-md-2">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
        </section>

        <br>

        <div class="text-center">
            <p>Copyright © 2023 Antonio Romero. All rights reserved.</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>