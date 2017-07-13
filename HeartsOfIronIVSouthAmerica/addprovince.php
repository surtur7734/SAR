<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SAE - Add Province</title>
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
                    ADD A PROVINCE TO THE LIST
                </h1>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>
                                <p>
                                    <strong>Province Name</strong>
                            <td>
                                <input type="text" name="PNAME">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Oil</strong>
                            <td>
                                <input type="text" name="OIL">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Aluminum</strong>
                            <td>
                                <input type="text" name="ALU">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Rubber</strong>
                            <td>
                                <input type="text" name="RUB">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Tungsten</strong>
                            <td>
                                <input type="text" name="TUN">
                            </td>
                            </p>
                            </td>
                        <tr>
                            <td>
                                <p>
                                    <strong>Steel</strong>
                            <td>
                                <input type="text" name="STE">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Chromium</strong>
                            <td>
                                <input type="text" name="CHR">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Country</strong>
                            <td>
                                <?php
                                if (isset($_POST)) {
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";

                                    $DBC = mysqli_connect($servername, $username, $password);

                                    if (!$DBC) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    } else {
                                        $db = 'HOIIVSA';
                                        $sql = "SELECT NAME FROM COUNTRY GROUP BY NAME";
                                        mysqli_select_db($DBC, $db);
                                        $resultpr = mysqli_query($DBC, $sql);
                                        echo '<SELECT>';
                                        while ($option = mysqli_fetch_array($resultpr)) {
                                            echo "<OPTION>$option[NAME]</OPTION>";
                                        }
                                    }
                                    ?>
                                </td>
                                </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <input type="submit" name="submit">
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";

                    $DBC = mysqli_connect($servername, $username, $password);

                    if (!$DBC) {
                        die("Connection failed: " . mysqli_connect_error());
                    } else {
                        echo "<p>Connected successfully</p>";
                        if (empty($_POST['PNAME'])) {
                            echo 'Enter a province name!';
                        } else {
                            $db = "HOIIVSA";
                            $name = $_POST['PNAME'];
                            $oil = $_POST['OIL'];
                            $alu = $_POST['ALU'];
                            $rub = $_POST['RUB'];
                            $tun = $_POST['TUN'];
                            $ste = $_POST['STE'];
                            $chr = $_POST['CHR'];
                            $PK = $_POST['PK'];
                            $sql = "INSERT INTO PROVINCE(PNAME, OIL, ALU, RUB, TUN, STE, CHR, COUNTRY) VALUES('$name', '$oil', '$alu', '$rub', '$tun', '$ste', '$chr', '$PK')";
                            mysqli_select_db($DBC, $db);
                            $result = mysqli_query($DBC, $sql);
                            if (!$result) {
                                die("Could not enter the data.");
                            } else {
                                echo 'The province was added to the database!';
                                mysqli_close($DBC);
                            }
                        }
                    }
                }else{
                    
                }
                ?>
            </div>
    </body>
</html>
