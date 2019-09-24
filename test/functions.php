<?php

use PHPUnit\Framework\TestCase;

require_once ('../functions.php');

class FunctionsTest extends TestCase {
    public function testDisplayFilms() {
        $arrayData = ['film1' => ['title' => 'A Few Good Men', 'release_year' => 1984, 'my_review' => 4, 'bechdel_status' => 'PASS']];
        $expectedResult = '<h3>' . $arrayData['film1']['title'] . '</h3>' .
            '<p>' . 'Year released: ' . $arrayData['film1']['release_year'] . '</p>' .
            '<p>' . 'Star review: ' . $arrayData['film1']['my_review'] . '</p>' .
            '<p>' . 'Bechdel test: ' . $arrayData['film1']['bechdel_status'] . '</p>';
        $result = displayFilms($arrayData);
        $this->assertEquals($expectedResult,$result);
    }
}



