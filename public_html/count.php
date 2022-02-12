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
        <li class="nav_element"><a href="distcenters.php">Distributers</a></li>
        <li class="nav_element"><a href="manufacturers.php">Manufacturers</a></li>
        <li class="nav_element"><a href="designers.php">Designers</a></li>

    </ul>

    <div class="tool">

    <?php require_once("db_setup.php"); ?> 

        <div class="box">
            <h1 class="title">Statistics</h1>
            <p class="text">Displays the distribution of different vaccines.</p>
            <form method="POST" action="count.php">

                <fieldset disabled class="ok">
                    <div class="block">
                        <div class="field">
                            <label class="label">Pfizer-BioNTech</label>
                            <div class="control">
                                <input type="text" class="input" placeholder= <?php 
                                if ($result = $conn->query('SELECT * FROM recipients 
                                                            JOIN distribution_centers ON recipients.dcID_visited=distribution_centers.dcID
                                                            JOIN dosages ON recipients.dosID_received=dosages.dosID
                                                            JOIN manufacturers ON dosages.manID_received=manufacturers.manID
                                                            JOIN designers ON manufacturers.desID_created=designers.desID 
                                                            WHERE designers.desName="Pfizer-BioNTech"')) 
                                    {
                                    printf($result->num_rows);
                                    } ?>
                                >
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Moderna</label>
                            <div class="control">
                                <input type="text" class="input" placeholder=<?php 
                                if ($result = $conn->query('SELECT * FROM recipients 
                                                            JOIN distribution_centers ON recipients.dcID_visited=distribution_centers.dcID
                                                            JOIN dosages ON recipients.dosID_received=dosages.dosID
                                                            JOIN manufacturers ON dosages.manID_received=manufacturers.manID
                                                            JOIN designers ON manufacturers.desID_created=designers.desID 
                                                            WHERE designers.desName="Moderna"')) 
                                    {
                                    printf($result->num_rows);
                                    } ?>
                                >
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Johnson & Johnson</label>
                            <div class="control">
                                <input type="text" class="input" placeholder=<?php 
                                if ($result = $conn->query('SELECT * FROM recipients 
                                                            JOIN distribution_centers ON recipients.dcID_visited=distribution_centers.dcID
                                                            JOIN dosages ON recipients.dosID_received=dosages.dosID
                                                            JOIN manufacturers ON dosages.manID_received=manufacturers.manID
                                                            JOIN designers ON manufacturers.desID_created=designers.desID 
                                                            WHERE designers.desName="Johnson & Johnson Janssen"')) 
                                    {
                                    printf($result->num_rows);
                                    } ?>
                                >
                            </div>
                        </div>
                    </div>
                </fieldset>

            </form>
        </div>
        </form>
    </div>