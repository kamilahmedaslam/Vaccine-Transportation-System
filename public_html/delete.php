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
    require_once('db_setup.php');

    $where = $_POST["recipientid"];
    $sql_delete = "DELETE FROM recipients
                   WHERE recID = $where";

    if ($conn->query($sql_delete) === TRUE) {
        echo "<br>";
        echo "<br>Values deleted if existed";
    } else {
        echo "<br>";
        echo "<br>Error deleting values " . $conn->error;
    }


    ?>

    <?php
    $conn->close();
    ?>  
</body>

</html>