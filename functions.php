<?php

require_once ('index.php');

function displayFilms($array) {
    foreach ($array as $item) {
        echo '<h3 style="margin-bottom: 5px">' . $item['title'] . '</h3>';
        echo '<p style="margin:0">' . 'Year released: ' . $item['release_year'] . '</p>';
        echo '<p style="margin:0">' . 'Star review: ' . $item['my_review'] . '</p>';
        echo '<p style="margin:0">' . 'Bechdel test: ' . $item['bechdel_status'] . '</p>';
    }


}
