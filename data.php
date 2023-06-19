<?php

$movies = [
    new Movie(
        1001,
        "Batman Begins",
        2005,
        "english",
        [
            new Actor(6001, "Christian Bale", 1, true),
            new Actor(6002, "Michael Caine", 1, true),
            new Actor(6003, "Morgan Freeman", 1, true)
        ],
        [
            new Genre(4001, "Azione"),
            new Genre(4002, "Avventura"),
            new Genre(4003, "Fantastico"),
            new Genre(4003, "Thriller"),
            new Genre(4003, "Drammatico")
        ]
    ),
    new Movie(
        1002,
        "Il cavaliere oscuro",
        2008,
        "english",
        [
            new Actor(6001, "Christian Bale", 1, true),
            new Actor(6002, "Michael Caine", 1, true),
            new Actor(6003, "Morgan Freeman", 1, true)
        ],
        [
            new Genre(4001, "Azione"),
            new Genre(4002, "Avventura"),
            new Genre(4003, "Fantastico"),
            new Genre(4003, "Thriller"),
            new Genre(4003, "Drammatico")
        ]
    ),
    new Movie(
        1003,
        "Il cavaliere oscuro - Il ritorno",
        2012,
        "english",
        [
            new Actor(6001, "Christian Bale", 1, true),
            new Actor(6002, "Michael Caine", 1, true),
            new Actor(6003, "Morgan Freeman", 1, true)
        ],
        [
            new Genre(4001, "Azione"),
            new Genre(4002, "Avventura"),
            new Genre(4003, "Fantastico"),
            new Genre(4003, "Thriller"),
            new Genre(4003, "Drammatico")
        ]
    )
];