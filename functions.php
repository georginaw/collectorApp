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
            '<h3 style="margin-bottom: 5px">' . $item['title'] . '</h3>' .
            '<p style="margin:0">' . 'Year released: ' . $item['release_year'] . '</p>' .
            '<p style="margin:0">' . 'Star review: ' . $item['my_review'] . '</p>' .
            '<p style="margin:0">' . 'Bechdel test: ' . $item['bechdel_status'] . '</p>';
    } return $string;
}
