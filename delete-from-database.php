<?php
require_once('functions.php');
$filmDB = linkToFilmDB();
$films = fetchFromDB($filmDB);

$id = $_POST['filmId'];

deleteFromDB($filmDB, $id);

header ('Location: index.php');

