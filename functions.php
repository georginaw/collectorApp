<?php

/*
 * used to set up link to the film database using PDO library and sets up the returned array to be associative
 *
 * returns variable with link to the film database
 */
function linkToFilmDB() {
    $filmDBLink = new PDO('mysql:host=db;dbname=collection', 'root', 'password');
    $filmDBLink->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $filmDBLink;
}


/*
 * used to retrieve all films from the film database, including their attributes
 *
 * @param $filmDBLink which is the link to the film database
 *
 * return array $films of films with their attributes
 */
function fetchFromDB($filmDBLink) : array {
    $query = $filmDBLink->query('SELECT `title`, `release_year`, `my_review`, `bechdel_status` FROM `films`');
    $films = $query->fetchAll();
    return $films;
}


/*
 * displays each film and its attributes (stored in the $films array, taken from the database) in a more readable way
 *
 * @param array $films which contains films and their attributes stored in the film database
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
 * adds the inputs from the 'new film' html form to the database after checking user inputs are secure
 *
 * @param $filmDBLink variable which contains a link to the film database
 * @param string $title title field data from the user form
 * @param int $year release_year field data from user form (1901 up to current year)
 * @param int $review my_review field data from user form (out of 5)
 * @param string $bechdel bechdel status field data from user form (pass/fail)
 *
 */
function addToDB($filmDBLink, string $title, int $year, int $review, string $bechdel) {
    $query = $filmDBLink->prepare('INSERT INTO `films` (`title`, `release_year`, `my_review`, `bechdel_status`) VALUES (:title, :release_year, :my_review, :bechdel_status)');
    $query->execute([':title' => $title, ':release_year' => $year, ':my_review' => $review, ':bechdel_status' => $bechdel]);
}

/*
 * creates an array of years from current date back through to the $firstYear year value to force the input in the year section of the form to be in a 4 INT format and within a limited time period
 *
 * @param int $firstYear should be the oldest year that users can select as a year of release for a film they enter on the form
 *
 * return string displaying years in the dropdown selection box on the film input form
 */
function createYearDropdownArray(int $firstYear): array {
    $yearArray = [];
    $date = getdate();
    $year = $date['year'];
    while ($year > $firstYear) {
        array_push($yearArray, $year);
        $year--;
    }
    return $yearArray;
}


/*
 * populates the year released dropdown selection on the user input form
 *
 * @param array $yearArray of year values
 *
 * return string displaying years in the dropdown selection box on the film input form
 */
function populateYearDropdown($yearArray): string {
    $string = '';
    for ($arrIndex = 0; $arrIndex < count($yearArray); $arrIndex++) {
        $string .= '<option value="' . $yearArray[$arrIndex] . '">' . $yearArray[$arrIndex] . '</option>';
    }
    return $string;
}