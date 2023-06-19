<?php

class Movie
{
    public int $id;
    public string $title;
    public int $year;
    public string $language;
    public array $actors;
    public array $genres;
    public static int $counter = 0;

    public function __construct(int $id, string $title, int $year, string $language, array $actors = [], array $genres = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->actors = $actors;
        $this->genres = $genres;
    }
}