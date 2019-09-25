<?php
require_once('./functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form method="post">
        <label>Film Title:</label>
        <input type="text" name="title">
        <label>Year released:</label>
        <select value="Year">
            <?php
            echo createYearDropdown();
            ?>
        </select>
        <label>Review /5:</label>
        <input type="number" max="5" min="0" name="my_review">
        <a href="http://bechdeltest.com/search/"><label>Bechdel Test:</label></a>
        <select name="bechdel_status" value="Select:">
              <option value="PASS">Pass</option>
              <option value="FAIL">Fail</option>
        </select>
        <input type="submit" value="Add film to collection" name="submit-to-db">
    </form>

<?php

?>
</body>
</html>