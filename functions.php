<?php

require_once ('index.php');

/*
 * displays each film and its attributes (from the database) in a human readable way
 *
 * @param array which is an array containing arrays for each film
 *
 * return string displaying films and film details
 */
function displayFilms(array $array) : string {
    $string = '';
    foreach ($array as $item) {
        $string .=
            '<h3>' . $item['title'] . '</h3>' .
            '<p>' . 'Year released: ' . $item['release_year'] . '</p>' .
            '<p>' . 'Star review: ' . $item['my_review'] . '</p>' .
            '<p>' . 'Bechdel test: ' . $item['bechdel_status'] . '</p>';
    } return $string;
}
