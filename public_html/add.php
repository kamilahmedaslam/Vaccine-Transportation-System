<!DOCTYPE html>
<html>

<head>
    <title>Vaccine Distribution and Logistics</title>
    <link rel="stylesheet" href="ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">

</head>

<body>

    <ul class="navbar">
        <li class="nav_element"><a href="index.html">Home</a></li>
        <li class="nav_element"><a href="recipients.php">Recipients</a></li>
        <li class="nav_element"><a href="dosages.php">Dosages</a></li>
        <li class="nav_element"><a href="distcenters.php">Distribution Centers</a></li>
        <li class="nav_element"><a href="manufacturers.php">Manufacturers</a></li>
        <li class="nav_element"><a href="designers.php">Designers</a></li>

    </ul>
    <?php
    require_once("db_setup.php");

    $dosID = rand(10, 1000);
    $dosDate = date("Y-m-d");
    $desID_received = rand(1, 3);
    $manID_received = rand(1, 10);

    $sql_insert = "INSERT INTO dosages (dosID, dosDate, desID_received, manID_received)
                   VALUES ($dosID, '$dosDate', '$desID_received', '$manID_received')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<br>Processing...";
    } else {
        echo "<br>Error adding values " . $conn->error;
        $conn->close();
    }

    ######

    $recFName = $_GET["firstname"];
    $recLName = $_GET["lastname"];
    $recEmail = $_GET["email"];
    $recPhone = $_GET["number"];
    $recCountry = $_GET["country"];
    $recCity = $_GET["city"];
    $recZip = $_GET["zip"];
    $recStreet = $_GET["street"];

    $recID = rand(10, 1000);
    $dcID = rand(1, 3);

    $array = array($recFName,$recLName,$recEmail,$recPhone,$recCountry,$recCity,$recZip,$recStreet,$dcID);

    $hasEmptyString = in_array( true, array_map( function ($e) { return strlen($e) == 0; } , $array));
    if($hasEmptyString)  {echo "<br>Error: One or more entered fields are empty. Input length should be more than 0 characters. " . $conn->close();}

    $hasLongString = in_array( true, array_map( function ($e) { return strlen($e) > 50; } , $array));
    if($hasLongString)  {echo "<br>Error: One or more entered fields are too long. Input length should be less than 50 characters. " . $conn->close();}

    $sql_insert = "INSERT INTO recipients (recID, recFName, recLName, recEmail, recPhone, recCountry, recCity, recZip, recStreet, dosID_received, dcID_visited)
                   VALUES ($recID, '$recFName', '$recLName', '$recEmail', $recPhone, '$recCountry', '$recCity', $recZip, '$recStreet', $dosID, $dcID)";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<br>";
        echo "<br>Values added";
    } else {
        echo "<br>";
        echo "<br>Error adding values " . $conn->error;
    }

    ?>

    <?php
    $conn->close();
    ?>  
</body>

</html>