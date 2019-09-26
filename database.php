<?php
require_once('functions.php');

$title = $_POST['title'];
$year = $_POST['year'];
$review = $_POST['my_review'];
$bechdel = $_POST['bechdel_status'];

$filmDB = linkToFilmDB();

addToDB($filmDB, $title, $year, $review, $bechdel);

header ('Location: display.php');
