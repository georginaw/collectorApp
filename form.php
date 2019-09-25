<?php
require_once('functions.php');

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
    <form method="post" action="database.php">
        <label>Film Title:</label>
        <input type="text" name="title" required>
        <label>Year released:</label>
        <select value="year" name="year" required>
            <option></option>
            <?php
            echo createYearDropdown();
            ?>
        </select>
        <label>Review /5:</label>
        <input type="number" max="5" min="0" name="my_review" required>
        <a href="http://bechdeltest.com/search/"><label>Bechdel Test:</label></a>
        <select value="Select:" name="bechdel_status" required>
            <option></option>
            <option value="PASS">Pass</option>
            <option value="FAIL">Fail</option>
        </select>
        <input type="submit" value="Add film to collection" name="submit-to-db">
    </form>
<?php
//call/add functions to check if data filled out correctly for each input
//call/add function to input the data to the db

?>
</body>
</html>

