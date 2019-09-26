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

    public function testCreateYearDropdownArray() {
        $firstYear = 2010;
        $expectedResult = [2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011];
        $result = createYearDropdownArray($firstYear);
        $this->assertEquals($expectedResult,$result);
    }
}

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

