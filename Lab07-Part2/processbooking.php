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
        if (isset($_POST["firstname"])) {
            $firstname = trim($_POST["firstname"]);
        } else {
            $firstname = "";
        }

        if (isset($_POST["lastname"])) {
            $lastname = trim($_POST["lastname"]); 
        } else {
            $lastname = "";
        }

        if (isset($_POST["species"])) {
            $species_code = $_POST["species"];
        } else {
            $species_code = "";
        }

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
        
        if (isset($_POST["age"])) {
            $age = $_POST["age"];
        } else {
            $age = "";
        }

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

        if (isset($_POST["food"])) {
            $food = $_POST["food"];
        } else {
            $food = "";
        }

        if (isset($_POST["partysize"])) {
            $partysize = $_POST["partysize"];
        } else {
            $partysize = "";
        }
        
        echo "<p>Welcome $firstname $lastname !</p>"; 
        echo "<p>Species: $species</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Meal Preference: $food</p>";
        echo "<p>Number of travellers: $partysize</p>";

    ?>

</body>
</html>
