<?php

require_once ('index.php');

/*
 * displays each film and its attributes (from the database) in a human readable way
 *
 * @param array which is an films array containing arrays for each film
 *
 * return string displaying films and film details
 */
function displayFilms(array $films) : string {
    $string = '';
    foreach ($films as $film) {
        $string .=
            '<h3>' . $film['title'] . '</h3><p>Year released: ' . $film['release_year'] . '</p><p>Star review: ' . $film['my_review'] . '</p><p>Bechdel test: ' . $film['bechdel_status'] . '</p>';
    } return $string;
}
