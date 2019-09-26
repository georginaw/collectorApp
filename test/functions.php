<?php

use PHPUnit\Framework\TestCase;

require_once ('../functions.php');

class FunctionsTest extends TestCase {
    public function testDisplayFilms() {
        $arrayData = [['title' => 'A Few Good Men', 'release_year' => 1992, 'my_review' => 4, 'bechdel_status' => 'FAIL'], ['title' => 'Stand By Me', 'release_year' => 1986, 'my_review' => 5, 'bechdel_status' => 'FAIL']];
        $expectedResult = '<h3>A Few Good Men</h3><p>Year released: 1992</p><p>Star review: 4</p><p>Bechdel test: FAIL</p><h3>Stand By Me</h3><p>Year released: 1986</p><p>Star review: 5</p><p>Bechdel test: FAIL</p>';
        $result = displayFilms($arrayData);
        $this->assertEquals($expectedResult,$result);
    }
}

class FunctionsTest extends TestCase {
    public function testDisplayFilms() {
        $arrayData = [['title' => 'A Few Good Men', 'release_year' => 1992, 'my_review' => 4, 'bechdel_status' => 'FAIL'], ['title' => 'Stand By Me', 'release_year' => 1986, 'my_review' => 5, 'bechdel_status' => 'FAIL']];
        $expectedResult = '<h3>A Few Good Men</h3><p>Year released: 1992</p><p>Star review: 4</p><p>Bechdel test: FAIL</p><h3>Stand By Me</h3><p>Year released: 1986</p><p>Star review: 5</p><p>Bechdel test: FAIL</p>';
        $result = displayFilms($arrayData);
        $this->assertEquals($expectedResult,$result);
    }
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
 * creates a string of years from current date back through to 1901 to force the input in the year section of the form to be in a 4 INT format
 *
 * return string displaying years in the dropdown selection box on the film input form
 */
function createYearDropdown() : string {
    $string = '';
    $date = getdate();
    $year = $date['year'];
    while ($year > 1900) {
        $string .= '<option value="' . $year . '">' . $year . '</option>';
        $year--;
    }
    return $string;
}

