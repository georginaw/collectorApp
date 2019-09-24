<?php

$db = new PDO('mysql:host=db;dbname=collection', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query('SELECT `title`, `release_year`, `my_review`, `bechdel_status` FROM `films`');

$films = $query->fetchAll();

foreach ($films as $listing) {
    echo '<h3 style="margin-bottom: 5px">' . $listing['title'] . '</h3>';
    echo '<p style="margin:0">' . 'Year released: ' . $listing['release_year'] . '</p>';
    echo '<p style="margin:0">' . 'Star review: ' . $listing['my_review'] . '</p>';
    echo '<p style="margin:0">' . 'Bechdel test: ' . $listing['bechdel_status'] . '</p>';
}
