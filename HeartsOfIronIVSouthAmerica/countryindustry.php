<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SAE - Industry Overview</title>
        <link rel="stylesheet" type="text/css" href="southamericaexpanded.css">
    </head>
    <body>
        <a class="navlink" href="infopage.php"><a<div id="logo">
                </div></a>
            <div id="wrap">
                <div id="navbar">
                    <a class="navlink" href="infopage.php"><div class="navbut"><div class="navtext"><p>
                                    Home
                                </p></div></div></a>
                    <a class="navlink" href="addcountry.php"><div class="navbut"><div class="navtext"><p>
                                    Add Countries
                                </p></div></div></a>
                    <a class="navlink" href="addprovince.php"><div class="navbut"><div class="navtext"><p>
                                    Add Provinces
                                </p></div></div></a>
                    <a class="navlink" href="countryoverview.php"><div class="navbut"><div class="navtext"><p>
                                    Country Province Overview
                                </p></div></div></a>
                    <a class="navlink" href="countryindustry.php"><div class="navbut"><div class="navtext"><p>
                                    Country Industry Overviews
                                </p></div></div></a>
                    <a class="navlink" href="about.php"><div class="navbut"><div class="navtext"><p>
                                    About
                                </p></div></div></a>
                </div>
                <h1>
                    COUNTRY OVERVIEW
                </h1>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";

                $DBC = mysqli_connect($servername, $username, $password);

                if (!$DBC) {
                    die("Connection failed: " . mysqli_connect_error());
                } else {
                    echo "<p>Connected successfully</p>";
                    $db = 'HOIIVSA';
                    mysqli_select_db($DBC, $db);
                    //SQL
                    $argsql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Argentina'";
                    $bolsql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Bolivia'";
                    $brasql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Brazil'";
                    $chlsql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Chile'";
                    $colsql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Colombia'";
                    $ecusql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Ecuador'";
                    $parsql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Paraguay'";
                    $persql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Peru'";
                    $urusql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Uruguay'";
                    $vensql = "SELECT MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT FROM COUNTRY WHERE NAME = 'Venezuela'";
                    //Execute
                    $arg = mysqli_query($DBC, $argsql);
                    $bol = mysqli_query($DBC, $bolsql);
                    $bra = mysqli_query($DBC, $brasql);
                    $chl = mysqli_query($DBC, $chlsql);
                    $col = mysqli_query($DBC, $colsql);
                    $ecu = mysqli_query($DBC, $ecusql);
                    $par = mysqli_query($DBC, $parsql);
                    $per = mysqli_query($DBC, $persql);
                    $uru = mysqli_query($DBC, $urusql);
                    $ven = mysqli_query($DBC, $vensql);
                    echo "<h2>Argentina</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($argpr = mysqli_fetch_assoc($arg)) {
                        echo "<tr><td>$argpr[MILITARY]</td>"
                        . "<td>$argpr[CIVILIAN]</td>"
                        . "<td>$argpr[NAVAL]</td>"
                        . "<td>$argpr[CONVOYS]</td>"
                        . "<td>$argpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Bolivia</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($bolpr = mysqli_fetch_assoc($bol)) {
                        echo "<tr><td>$bolpr[MILITARY]</td>"
                        . "<td>$bolpr[CIVILIAN]</td>"
                        . "<td>$bolpr[NAVAL]</td>"
                        . "<td>$bolpr[CONVOYS]</td>"
                        . "<td>$bolpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Brazil</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($brapr = mysqli_fetch_assoc($bra)) {
                        echo "<tr><td>$brapr[MILITARY]</td>"
                        . "<td>$brapr[CIVILIAN]</td>"
                        . "<td>$brapr[NAVAL]</td>"
                        . "<td>$brapr[CONVOYS]</td>"
                        . "<td>$brapr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Chile</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($chlpr = mysqli_fetch_assoc($chl)) {
                        echo "<tr><td>$chlpr[MILITARY]</td>"
                        . "<td>$chlpr[CIVILIAN]</td>"
                        . "<td>$chlpr[NAVAL]</td>"
                        . "<td>$chlpr[CONVOYS]</td>"
                        . "<td>$chlpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Colombia</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($colpr = mysqli_fetch_assoc($col)) {
                        echo "<tr><td>$colpr[MILITARY]</td>"
                        . "<td>$colpr[CIVILIAN]</td>"
                        . "<td>$colpr[NAVAL]</td>"
                        . "<td>$colpr[CONVOYS]</td>"
                        . "<td>$colpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Ecuador</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($ecupr = mysqli_fetch_assoc($ecu)) {
                        echo "<tr><td>$ecupr[MILITARY]</td>"
                        . "<td>$ecupr[CIVILIAN]</td>"
                        . "<td>$ecupr[NAVAL]</td>"
                        . "<td>$ecupr[CONVOYS]</td>"
                        . "<td>$ecupr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Paraguay</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($parpr = mysqli_fetch_assoc($par)) {
                        echo "<tr><td>$parpr[MILITARY]</td>"
                        . "<td>$parpr[CIVILIAN]</td>"
                        . "<td>$parpr[NAVAL]</td>"
                        . "<td>$parpr[CONVOYS]</td>"
                        . "<td>$parpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Peru</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($perpr = mysqli_fetch_assoc($per)) {
                        echo "<tr><td>$perpr[MILITARY]</td>"
                        . "<td>$perpr[CIVILIAN]</td>"
                        . "<td>$perpr[NAVAL]</td>"
                        . "<td>$perpr[CONVOYS]</td>"
                        . "<td>$perpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Uruguay</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($urupr = mysqli_fetch_assoc($uru)) {
                        echo "<tr><td>$urupr[MILITARY]</td>"
                        . "<td>$urupr[CIVILIAN]</td>"
                        . "<td>$urupr[NAVAL]</td>"
                        . "<td>$urupr[CONVOYS]</td>"
                        . "<td>$urupr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Venezuela</h2> <table border='1' width='50%'> <tr><th>Military Factories</th><th>Civilian Factories</th><th>Naval Dockyards</th><th>Convoys</th><th>Alignment</th></tr>";
                    while ($venpr = mysqli_fetch_assoc($ven)) {
                        echo "<tr><td>$venpr[MILITARY]</td>"
                        . "<td>$venpr[CIVILIAN]</td>"
                        . "<td>$venpr[NAVAL]</td>"
                        . "<td>$venpr[CONVOYS]</td>"
                        . "<td>$venpr[ALIGNMENT]</td></tr>";
                    }
                    echo "</table>";
                }
                ?>
            </div>
    </body>
</html>
