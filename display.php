<?php
require_once('functions.php');

$filmDB = linkToFilmDB();
$films = fetchFromDB($filmDB);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

echo displayFilms($films);

?>
</body>
</html>