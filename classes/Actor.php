<?php

class Actor
{
    public int $id;
    public string $name;
    public string $movie_name;
    public int $gender;
    public bool $adult;

    public function __construct(int $id, string $name, string $movie_name, int $gender, bool $adult)
    {
        $this->id = $id;
        $this->name = $name;
        $this->movie_name = $movie_name;
        $this->gender = $gender;
        $this->adult = $adult;
    }

    public function getActorRole($role = "nel ruolo di: ")
    {
        return $this->name . " " . $role . " " . $this->movie_name;
    }
}