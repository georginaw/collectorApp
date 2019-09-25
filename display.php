<?php
session_start();
require_once('functions.php');

if (!isset($_SESSION['formStatus'])) {
    $_SESSION['formStatus'] = 'set';
} elseif ($_SESSION['formStatus'] == 'formCheck') {
    $newFilm = getFormData();
    foreach ($newFilm as $key => $info) {
        echo $key . $info;
    }
}

$films = fetchFromDB();

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