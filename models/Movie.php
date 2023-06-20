<?php

class Movie
{
    public static int $counter = 0;

    public function __construct(
        public int $id,
        public string $title,
        public int $duration,
        public int $year,
        public string $language,
        public array $actors,
        public array $genres
    ) {

        foreach ($actors as $actor) {
            if (!$actor instanceof Actor) {
                die("L'oggetto deve essere del tipo di Actor");
            }
        };

        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                die("L'oggetto deve essere del tipo di Genre");
            }
        };

        self::$counter += 1;
    }
}