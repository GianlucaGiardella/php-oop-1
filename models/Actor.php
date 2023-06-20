<?php

class Actor
{
    public static int $actor_counter = 0;

    public function __construct(
        public int $id,
        public string $name,
        public string $movie_name,
        public int $gender,
        public bool $adult
    ) {
        self::$actor_counter += 1;
    }


    public function get_actor_role($role = "nel ruolo di: ")
    {
        return $this->name . " " . $role . " " . $this->movie_name;
    }
}