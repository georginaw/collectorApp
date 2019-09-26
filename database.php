<?php
require_once('functions.php');

//$_POST['title'];
//$_POST['year'];
//$_POST['my_review'];
//$_POST['bechdel_status'];
//
//$title = $_POST['title'];
//$year = $_POST['year'];
//$review = $_POST['my_review'];
//$bechdel = $_POST['bechdel_status'];

$db = linkToFilmDB();

addToDB($db);

header ('Location: display.php');


//foreach ($array as $item => $value) {
//    echo '<p>' . $item . ': ' . $value . '</p>';
//}






