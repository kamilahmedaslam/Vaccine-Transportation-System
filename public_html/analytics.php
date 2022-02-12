<!DOCTYPE html>
<html>

<head>
    <title>Vaccine Distribution and Logistics</title>
    <link rel="stylesheet" href="ui.css">
    <link rel="icon" href="favicon.ico">
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

    <div class="block">

    <?php
    require_once('db_setup.php');

    echo "<br>";

    $where_des = $_POST["desname"];
    $where_rec = $_POST["recipientcountry"];
    
	$sql_select = "SELECT * FROM recipients 
                   JOIN distribution_centers ON recipients.dcID_visited=distribution_centers.dcID
                   JOIN dosages ON recipients.dosID_received=dosages.dosID
                   JOIN manufacturers ON dosages.manID_received=manufacturers.manID
                   JOIN designers ON manufacturers.desID_created=designers.desID
                   WHERE designers.desName='$where_des' OR recipients.recCountry='$where_rec'";
  	$result = $conn->query($sql_select);

    if (empty($result->fetch_assoc())) {
        echo "<br>";
        echo "Output is empty. Please enter valid options.";
        mysqli_close($con);
    }

	  $result = mysqli_query($conn,$sql_select);

      echo "<table border='1'>
      <tr>
      <th>recID</th>
      <th>recFName</th>
      <th>recLName</th>
      <th>recPhone</th>
      <th>recEmail</th>
      <th>recCountry</th>
      <th>recCity</th>
      <th>recStreet</th>
      <th>recDate</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['recID'] . "</td>";
      echo "<td>" . $row['recFName'] . "</td>";
      echo "<td>" . $row['recLName'] . "</td>";
      echo "<td>" . $row['recPhone'] . "</td>";
      echo "<td>" . $row['recEmail'] . "</td>";
      echo "<td>" . $row['recCountry'] . "</td>";
      echo "<td>" . $row['recCity'] . "</td>";
      echo "<td>" . $row['recStreet'] . "</td>";
      echo "<td>" . $row['recDate'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";

      mysqli_close($con);
      ?>

</body>

</html>
