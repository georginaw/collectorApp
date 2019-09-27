<?php
require_once('functions.php');
$date = getdate();
$thisYear = $date['year'];
$firstYear = 1894;
$yearArray = createYearDropdownArray($thisYear, $firstYear);

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
    <form method="post" action="add-to-database.php" class="add-film">
        <div class="form-input">
            <label>Film Title:</label>
            <input type="text" name="title" required>
        </div>
        <div class="form-input">
        <label>Year released:</label>
        <select type="number" value="year" name="year" required>
            <option></option>
            <?php
            echo populateYearDropdown($yearArray);
            ?>
        </select>
        </div>
        <div class="form-input">
            <label>Review /5:</label>
            <input type="number" max="5" min="1" name="my_review" required>
        </div>
        <div class="form-input">
            <a href="http://bechdeltest.com/search/" target="_blank"><label>Bechdel Test:</label></a>
            <select value="Select:" name="bechdel_status" required>
                <option></option>
                <option value="PASS">Pass</option>
                <option value="FAIL">Fail</option>
            </select>
        </div>
        <div class="form-input">
            <input type="submit" value="Add film to collection" name="submit-to-db">
        </div>
    </form>
    <div class="button">
        <a href="index.php">Back</a>
    </div>
</body>
</html>