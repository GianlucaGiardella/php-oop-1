<?php

class Movie
{
    public int $id;
    public string $title;
    public int $duration;
    public int $year;
    public string $language;
    public array $actors;
    public array $genres;
    public static int $counter = 0;

    public function __construct(int $id, string $title, int $duration, int $year, string $language, array $actors = [], array $genres = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->year = $year;
        $this->language = $language;

        foreach ($actors as $actor) {
            if (!$actor instanceof Actor) {
                die("L'oggetto deve essere del tipo di Actor");
            }
        };
        $this->actors = $actors;

        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                die("L'oggetto deve essere del tipo di Genre");
            }
        };
        $this->genres = $genres;

        self::$counter += 1;
    }
}