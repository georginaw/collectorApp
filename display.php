<?php
require_once('functions.php');
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
<?php
$filmDB = linkToFilmDB();
$films = fetchFromDB($filmDB);
echo displayFilms($films);
?>
</body>
</html>