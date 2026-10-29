<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="PHP Variables, Arrays and Operators" />
    <meta name="keywords" content="PHP, Arrays" />
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

        echo "<p>The days of the week in English are:<br />";
        echo implode(", ", $days) . ".</p>";

        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

        echo "<p>The days of the week in French are:<br />";
        echo implode(", ", $days) . ".</p>";
    ?>
</body>
</html>