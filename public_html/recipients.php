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
    <label class="relations" for="block">Recipients</label>


      <?php

      echo "<br>";

      require_once('db_setup.php');

      $result = mysqli_query($conn,"SELECT * FROM recipients");

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
      echo "<br>";
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