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
        <li class="nav_element"><a href="distcenters.php">Distributers</a></li>
        <li class="nav_element"><a href="manufacturers.php">Manufacturers</a></li>
        <li class="nav_element"><a href="designers.php">Designers</a></li>

    </ul>


    <div class="block">
    <label class="relations" for="block">Designers</label>


      <?php

      echo "<br>";

      require_once('db_setup.php');

      $result = mysqli_query($conn,"SELECT * FROM designers");

      echo "<table border='1'>
      <tr>
      <th>desID</th>
      <th>desName</th>
      <th>desPhone</th>
      <th>desEmail</th>
      <th>desCountry</th>
      <th>desCity</th>
      <th>desStreet</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<br>";
      echo "<tr>";
      echo "<td>" . $row['desID'] . "</td>";
      echo "<td>" . $row['desName'] . "</td>";
      echo "<td>" . $row['desPhone'] . "</td>";
      echo "<td>" . $row['desEmail'] . "</td>";
      echo "<td>" . $row['desCountry'] . "</td>";
      echo "<td>" . $row['desCity'] . "</td>";
      echo "<td>" . $row['desStreet'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";

      mysqli_close($con);
      ?>