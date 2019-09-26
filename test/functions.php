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
        $firstYear = 2015;
        $thisYear = 2019;
        $expectedResult = [2019, 2018, 2017, 2016];
        $result = createYearDropdownArray($thisYear, $firstYear);
        $this->assertEquals($expectedResult,$result);
    }

    public function testPopulateDropdownArray() {
        $yearArray = [2019, 2018, 2017, 2016];
        $expectedResult = '<option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option>';
        $result = populateYearDropdown($yearArray);
        $this->assertEquals($expectedResult, $result);
    }
}