<?php

class Actor
{
    public int $id;
    public string $name;
    public int $gender;
    public bool $adult;

    public function __construct(int $id, string $name, int $gender, bool $adult)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->adult = $adult;
    }
}