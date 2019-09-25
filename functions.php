<?php

/*
 * prepare data from form to go into the database
 */
function linkToFilmDB() {
    $db = new PDO('mysql:host=db;dbname=collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/*
 * used to retrieve data from the film database
 *
 * return array of films with attributes from database
 */
function fetchFromDB() : array {
    $db = linkToFilmDB();
    $query = $db->query('SELECT `title`, `release_year`, `my_review`, `bechdel_status` FROM `films`');
    $films = $query->fetchAll();
    return $films;
}

/*
 * used to retrieve data from form to prepare it to be security-checked and entered to the film database
 */
function getFormData() {
    
}



/*
 * displays each film and its attributes (stored in the $films array, taken from the database) in a human readable way
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







