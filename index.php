<?php
include __DIR__ . "/classes/Movie.php";
include __DIR__ . "/classes/Actor.php";
include __DIR__ . "/classes/Genre.php";
include __DIR__ . "/data.php";
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
        <?php
        foreach ($movies as $movie) { ?>
        <h2>Movies:</h2>
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
            <hr>
            <?php } ?>
        </ul>
    </div>
</body>

</html>