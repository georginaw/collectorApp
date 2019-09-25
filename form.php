<?php

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
    <form method="post">
        <input type="text" name="title">
        <input type="number" maxlength="4" minlength="4" name="release_year">
        <input type="number" maxlength="1" minlength="1" max="5" min="0" name="my_review">
        <select name="bechdel_status" value="Select:">
            <option value="PASS">Pass</option>
            <option value="FAIL">Fail</option>
        </select>
    </form>

<?php

?>
</body>
</html>