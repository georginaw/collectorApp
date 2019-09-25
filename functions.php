<?php

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

/*
 * creates a string of years from current date through to 1901 to force the input in the year section of the form to be in a 4 INT format
 *
 * return string displaying years in the dropdown selection box on the film input form
 */
function createYearDropdown() {
    $string = '';
    $date = getdate();
    $year = $date['year'];
    while ($year > 1900) {
        $string .= '<option value="' . $year . '">' . $year . '</option>';
        $year--;
    }
    return $string;
}



