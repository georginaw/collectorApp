<?php

require_once('functions.php');

/*
 * used to retrieve data from form to prepare it to be security-checked and entered to the film database
 */
function getFormData() {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $review = $_POST['my_review'];
    $bechdel = $_POST['bechel_status'];
    $filmArray = [$title, $year, $review, $bechdel];
    return $filmArray;
}