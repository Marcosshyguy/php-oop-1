<?php
require_once __DIR__  . "/MODEL/Movie.php";

$movies = [
    $nightmare_before_christmas = new Movie('Nightmare Before Christmas', new Genre('fantasy', 'horror'), 'Tim Burton', 'October 13, 1993'),
    $weekend_at_bernie = new Movie("Weekend at Bernie's", new Genre('comedy'), 'Ted KotCheff', 'July 5, 1989', 'Movie with a dead man and two guys that pretend to make him look alive'),
    $back_to_the_future = new Movie("Back to the Future", new Genre('sci-fi', 'comedy'), 'Robert Zemekis', 'July 3, 1985'),
    $citizen_kane = new Movie('Citizen Kane!', new Genre('Drama'), 'Orson Wells', 'September 5, 1941')
];
