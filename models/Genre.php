<?php

class Genre
{
    public static int $genre_counter = 0;

    public function __construct(public int $id,  public string $name)
    {
        self::$genre_counter += 1;
    }
}