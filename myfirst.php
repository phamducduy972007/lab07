<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
        $marks = array (85, 85, 95);
        $marks[1] = 90;
        $ave = array_sum($marks) / count($marks); 
        $status = ($ave >= 50) ? "PASSED" : "FAILED";
        $formattedAve = number_format($ave, 2);
        echo "<p>The average score is $formattedAve. You $status.</p>";
    ?>
</body>
</html>