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
    <label class="relations" for="block">Manufacturers</label>


      <?php

      echo "<br>";

      require_once('db_setup.php');

      $result = mysqli_query($conn,"SELECT * FROM manufacturers");

      echo "<table border='1'>
      <tr>
      <th>manID</th>
      <th>manName</th>
      <th>manPhone</th>
      <th>manEmail</th>
      <th>manCountry</th>
      <th>manCity</th>
      <th>manStreet</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<br>";
      echo "<tr>";
      echo "<td>" . $row['manID'] . "</td>";
      echo "<td>" . $row['manName'] . "</td>";
      echo "<td>" . $row['manPhone'] . "</td>";
      echo "<td>" . $row['manEmail'] . "</td>";
      echo "<td>" . $row['manCountry'] . "</td>";
      echo "<td>" . $row['manCity'] . "</td>";
      echo "<td>" . $row['manStreet'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";

      mysqli_close($con);
      ?>