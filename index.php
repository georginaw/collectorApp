<?php
require_once('functions.php');
$filmDB = linkToFilmDB();
$films = fetchFromDB($filmDB);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Collection</title>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<?php

echo displayFilms($films);

?>
</div>
<div class="button">
    <a href="form.php">Add Film to Collection</a>
</div>
</body>
</html>