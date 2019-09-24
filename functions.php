<?php

require ('index.php');

foreach ($films as $listing) {
echo '<h3 style="margin-bottom: 5px">' . $listing['title'] . '</h3>';
echo '<p style="margin:0">' . 'Year released: ' . $listing['release_year'] . '</p>';
echo '<p style="margin:0">' . 'Star review: ' . $listing['my_review'] . '</p>';
echo '<p style="margin:0">' . 'Bechdel test: ' . $listing['bechdel_status'] . '</p>';
}