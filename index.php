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
        <ul><?php
            foreach ($movies as $movie) { ?>
            <li><?= $movie->title . $movie->year . $movie->language ?></li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>