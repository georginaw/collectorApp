<?php
require_once('functions.php');

$title = $_POST['title'];
$year = $_POST['year'];
$review = $_POST['my_review'];
$bechdel = $_POST['bechdel_status'];

$db = linkToFilmDB();

addToDB($db, $title, $year, $review, $bechdel);

header ('Location: display.php');







