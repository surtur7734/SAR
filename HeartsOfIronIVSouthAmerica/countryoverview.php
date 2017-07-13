<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SAE - Country Overview</title>
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
                    $argsql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Argentina'";
                    $bolsql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Bolivia'";
                    $brasql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Brazil'";
                    $chlsql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Chile'";
                    $colsql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Colombia'";
                    $ecusql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Ecuador'";
                    $nasql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'N/A'";
                    $parsql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Paraguay'";
                    $persql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Peru'";
                    $urusql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Uruguay'";
                    $vensql = "SELECT PNAME, OIL, ALU, RUB, TUN, STE, CHR FROM PROVINCE, COUNTRY WHERE COUNTRY.NAME = COUNTRY AND COUNTRY = 'Venezuela'";
                    //Execute
                    $arg = mysqli_query($DBC, $argsql);
                    $bol = mysqli_query($DBC, $bolsql);
                    $bra = mysqli_query($DBC, $brasql);
                    $chl = mysqli_query($DBC, $chlsql);
                    $col = mysqli_query($DBC, $colsql);
                    $ecu = mysqli_query($DBC, $ecusql);
                    $na = mysqli_query($DBC, $nasql);
                    $par = mysqli_query($DBC, $parsql);
                    $per = mysqli_query($DBC, $persql);
                    $uru = mysqli_query($DBC, $urusql);
                    $ven = mysqli_query($DBC, $vensql);
                    echo "<h2>Argentina</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($argpr = mysqli_fetch_assoc($arg)) {
                        echo "<tr><td>$argpr[PNAME]</td>"
                        . "<td>$argpr[OIL]</td>"
                        . "<td>$argpr[ALU]</td>"
                        . "<td>$argpr[RUB]</td>"
                        . "<td>$argpr[TUN]</td>"
                        . "<td>$argpr[STE]</td>"
                        . "<td>$argpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Bolivia</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($bolpr = mysqli_fetch_assoc($bol)) {
                        echo "<tr><td>$bolpr[PNAME]</td>"
                        . "<td>$bolpr[OIL]</td>"
                        . "<td>$bolpr[ALU]</td>"
                        . "<td>$bolpr[RUB]</td>"
                        . "<td>$bolpr[TUN]</td>"
                        . "<td>$bolpr[STE]</td>"
                        . "<td>$bolpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Brazil</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($brapr = mysqli_fetch_assoc($bra)) {
                        echo "<tr><td>$brapr[PNAME]</td>"
                        . "<td>$brapr[OIL]</td>"
                        . "<td>$brapr[ALU]</td>"
                        . "<td>$brapr[RUB]</td>"
                        . "<td>$brapr[TUN]</td>"
                        . "<td>$brapr[STE]</td>"
                        . "<td>$brapr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Chile</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($chlpr = mysqli_fetch_assoc($chl)) {
                        echo "<tr><td>$chlpr[PNAME]</td>"
                        . "<td>$chlpr[OIL]</td>"
                        . "<td>$chlpr[ALU]</td>"
                        . "<td>$chlpr[RUB]</td>"
                        . "<td>$chlpr[TUN]</td>"
                        . "<td>$chlpr[STE]</td>"
                        . "<td>$chlpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Colombia</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($colpr = mysqli_fetch_assoc($col)) {
                        echo "<tr><td>$colpr[PNAME]</td>"
                        . "<td>$colpr[OIL]</td>"
                        . "<td>$colpr[ALU]</td>"
                        . "<td>$colpr[RUB]</td>"
                        . "<td>$colpr[TUN]</td>"
                        . "<td>$colpr[STE]</td>"
                        . "<td>$colpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Ecuador</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($ecupr = mysqli_fetch_assoc($ecu)) {
                        echo "<tr><td>$ecupr[PNAME]</td>"
                        . "<td>$ecupr[OIL]</td>"
                        . "<td>$ecupr[ALU]</td>"
                        . "<td>$ecupr[RUB]</td>"
                        . "<td>$ecupr[TUN]</td>"
                        . "<td>$ecupr[STE]</td>"
                        . "<td>$ecupr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Paraguay</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($parpr = mysqli_fetch_assoc($par)) {
                        echo "<tr><td>$parpr[PNAME]</td>"
                        . "<td>$parpr[OIL]</td>"
                        . "<td>$parpr[ALU]</td>"
                        . "<td>$parpr[RUB]</td>"
                        . "<td>$parpr[TUN]</td>"
                        . "<td>$parpr[STE]</td>"
                        . "<td>$parpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Peru</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($perpr = mysqli_fetch_assoc($per)) {
                        echo "<tr><td>$perpr[PNAME]</td>"
                        . "<td>$perpr[OIL]</td>"
                        . "<td>$perpr[ALU]</td>"
                        . "<td>$perpr[RUB]</td>"
                        . "<td>$perpr[TUN]</td>"
                        . "<td>$perpr[STE]</td>"
                        . "<td>$perpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Uruguay</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($urupr = mysqli_fetch_assoc($uru)) {
                        echo "<tr><td>$urupr[PNAME]</td>"
                        . "<td>$urupr[OIL]</td>"
                        . "<td>$urupr[ALU]</td>"
                        . "<td>$urupr[RUB]</td>"
                        . "<td>$urupr[TUN]</td>"
                        . "<td>$urupr[STE]</td>"
                        . "<td>$urupr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Venezuela</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($venpr = mysqli_fetch_assoc($ven)) {
                        echo "<tr><td>$venpr[PNAME]</td>"
                        . "<td>$venpr[OIL]</td>"
                        . "<td>$venpr[ALU]</td>"
                        . "<td>$venpr[RUB]</td>"
                        . "<td>$venpr[TUN]</td>"
                        . "<td>$venpr[STE]</td>"
                        . "<td>$venpr[CHR]</td></tr>";
                    }
                    echo "</table>";
                    echo "<h2>Colony Provinces</h2> <table border='1' width='50%'> <tr><th>Province</th><th>Oil</th><th>Aluminum</th><th>Rubber</th><th>Tungsten</th><th>Steel</th><th>Chromium</th>";
                    while ($napr = mysqli_fetch_assoc($na)) {
                        echo "<tr><td>$napr[PNAME]</td>"
                        . "<td>$napr[OIL]</td>"
                        . "<td>$napr[ALU]</td>"
                        . "<td>$napr[RUB]</td>"
                        . "<td>$napr[TUN]</td>"
                        . "<td>$napr[STE]</td>"
                        . "<td>$napr[CHR]</td></tr>";
                    }
                    echo "</table>";
                }
                ?>
            </div>
    </body>
</html>
