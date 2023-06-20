<?php

$movies = [
    new Movie(
        1001,
        "Batman Begins",
        140,
        2005,
        "Inglese",
        [
            new Actor(6001, "Christian Bale", "Bruce Wayne", 1, true),
            new Actor(6002, "Michael Caine", "Alfred Pennyworth", 1, true),
            new Actor(6003, "Morgan Freeman", "Lucius Fox", 1, true),
            new Actor(6004, "Katie Holmes", "Rachel Dawes", 2, true),
            new Actor(6005, "Cillian Murphy", "Spaventapasseri", 1, true),
            new Actor(6006, "Liam Nesson", "Henri Ducard", 1, true),
        ],
        [
            new Genre(4001, "Azione"),
            new Genre(4002, "Avventura"),
            new Genre(4003, "Fantastico"),
            new Genre(4004, "Thriller"),
            new Genre(4005, "Drammatico")
        ]
    ),
    new Movie(
        1002,
        "Il cavaliere oscuro",
        152,
        2008,
        "Inglese",
        [
            new Actor(6001, "Christian Bale",  "Bruce Wayne", 1, true),
            new Actor(6029, "Heath Ledger", "Joker", 1, true),
            new Actor(6003, "Morgan Freeman", "Lucius Fox", 1, true),
            new Actor(6101, "Aaron Eckhart", "Due Faccie", 1, true),
            new Actor(6102, "Maggie Gyllenhaal", "Rachel Dawes", 2, true),
            new Actor(6390, "Gary Oldman", "James Gordon", 2, true)
        ],
        [
            new Genre(4001, "Azione"),
            new Genre(4002, "Avventura"),
            new Genre(4003, "Fantastico"),
            new Genre(4004, "Thriller"),
            new Genre(4005, "Drammatico")
        ]
    ),
    new Movie(
        1003,
        "Il cavaliere oscuro - Il ritorno",
        164,
        2012,
        "Inglese",
        [
            new Actor(6001, "Christian Bale",  "Bruce Wayne", 1, true),
            new Actor(6321, "Anne Hathaway", "Catwoman", 2, true),
            new Actor(6003, "Morgan Freeman", "Lucius Fox", 1, true),
            new Actor(6322, "Tom Hardy", "Bane", 1, true),
            new Actor(6250, "Marion Cotillard", "Miranda Tate", 2, true),
            new Actor(6370, "Joseph Gordon-Levitt", "Jhon Blake", 1, true),
        ],
        [
            new Genre(4001, "Azione"),
            new Genre(4002, "Avventura"),
            new Genre(4003, "Fantastico"),
            new Genre(4004, "Thriller"),
            new Genre(4005, "Drammatico")
        ]
    )
];