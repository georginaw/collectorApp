<?php

$db = new PDO('mysql:host=db;dbname=collection', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query('SELECT `title`, `release_year`, `my_review`, `bechdel_status` FROM `collection`');

$films = $query->fetchAll();

var_dump($films);

