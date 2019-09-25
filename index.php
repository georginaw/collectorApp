<?php

require_once('functions.php');

$db = new PDO('mysql:host=db;dbname=collection', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query('SELECT `title`, `release_year`, `my_review`, `bechdel_status` FROM `films`');

$films = $query->fetchAll();

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