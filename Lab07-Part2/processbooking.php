<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Booking Confirmation" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
</head>

<body>
	<header><h1>Rohirrim Tour Booking Confirmation</h1></header>
    <?php
        $firstname = isset($_POST["firstname"]) ? trim($_POST["firstname"]) : "";
        $lastname  = isset($_POST["lastname"])  ? trim($_POST["lastname"])  : "";

        $species_code = isset($_POST["species"]) ? $_POST["species"] : "";
        $species = "";
        switch ($species_code) {
            case "M":
                $species = "Human";
                break;
            case "D":
                $species = "Dwarf";
                break;
            case "E":
                $species = "Elf";
                break;
            case "H":
                $species = "Hobbit";
                break;
            default:
                $species = "Unknown";
        }

        $age = isset($_POST["age"]) ? $_POST["age"] : "";
        $tours = array();
        if (isset($_POST["accom"])) {
            $tours[] = "Accommodation";
        }
        if (isset($_POST["4day"])) {
            $tours[] = "Four-day tour";
        }
        if (isset($_POST["10day"])) {
            $tours[] = "Ten-day tour";
        }

        $tour_string = "";
        if (count($tours) > 0) {
            if (count($tours) == 1) {
                $tour_string = $tours[0];
            } else if (count($tours) == 2) {
                $tour_string = implode(" and ", $tours);
            } else {
                $last_tour = array_pop($tours);
                $tour_string = implode(", ", $tours) . " and " . $last_tour;
            }
        }

        $food = isset($_POST["food"]) ? $_POST["food"] : "";
        $partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";
        
        echo "<p>Welcome $firstname $lastname !</p>";
        
        if (!empty($tour_string)) {
            echo "<p>You are now booked on the $tour_string</p>";
        }
        
        echo "<p>Species: $species</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Meal Preference: $food</p>";
        echo "<p>Number of travellers: $partysize</p>";
    ?>

</body>
</html>
