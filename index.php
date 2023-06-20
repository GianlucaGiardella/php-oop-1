<?php
include __DIR__ . "/models/Movie.php";
include __DIR__ . "/models/Actor.php";
include __DIR__ . "/models/Genre.php";
include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>
</head>

<body>
    <div class="container">
        <h2>Movies:</h2>
        <hr>
        <?php
        foreach ($movies as $movie) { ?>
        <ul>
            <li><?= $movie->title  ?></li>
            <li><?= $movie->year ?></li>
            <li><?= $movie->language ?></li>
            <li><?= $movie->duration ?></li>
            <li>
                <h3>Actors:</h3>
                <ul>
                    <?php foreach ($movie->actors as $actor) { ?>
                    <li><?= $actor->get_actor_role() ?></li>
                    <?php } ?>
                </ul>
            </li>
            <li>
                <h3>Genres:</h3>
                <ul>
                    <?php foreach ($movie->genres as $genre) { ?>
                    <li><?= $genre->name ?></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
        <hr>
        <?php } ?>
    </div>
</body>

</html>