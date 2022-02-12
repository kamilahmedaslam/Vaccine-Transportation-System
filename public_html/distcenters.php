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
    <label class="relations" for="block">Distributors</label>
</div>

<?php

      echo "<br>";

      require_once('db_setup.php');

      $result = mysqli_query($conn,"SELECT * FROM distribution_centers");

      echo "<table border='1'>
      <tr>
      <th>dcID</th>
      <th>dcName</th>
      <th>dcPhone</th>
      <th>dcEmail</th>
      <th>dcCountry</th>
      <th>dcCity</th>
      <th>dcStreet</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<br>";
      echo "<tr>";
      echo "<td>" . $row['dcID'] . "</td>";
      echo "<td>" . $row['dcName'] . "</td>";
      echo "<td>" . $row['dcPhone'] . "</td>";
      echo "<td>" . $row['dcEmail'] . "</td>";
      echo "<td>" . $row['dcCountry'] . "</td>";
      echo "<td>" . $row['dcCity'] . "</td>";
      echo "<td>" . $row['dcStreet'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";

      mysqli_close($con);
      ?>