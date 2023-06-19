<?php

class Genre
{
    public int $id;
    public string $name;
    public static int $genre_counter = 0;

    public function __construct(int $id,  string $name)
    {
        $this->id = $id;
        $this->name = $name;

        self::$genre_counter += 1;
    }
}