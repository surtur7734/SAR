<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SAE - Add Country</title>
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
                    ADD A COUNTRY TO THE LIST
                </h1>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>
                                <p>
                                    <strong>Country Name</strong>
                            <td>
                                <input type="text" name="NAME">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Military Factories</strong>
                            <td>
                                <input type="text" name="MILITARY">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Civilian Factories</strong>
                            <td>
                                <input type="text" name="CIVILIAN">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Naval Dockyards</strong>
                            <td>
                                <input type="text" name="NAVAL">
                            </td>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <strong>Convoys</strong>
                            <td>
                                <input type="text" name="CONVOYS">
                            </td>
                            </p>
                            </td>
                        <tr>
                            <td>
                                <p>
                                    <strong>Alignment</strong>
                            <td>
                                <input type="text" name="ALIGNMENT">
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
                if (isset($_POST)) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";

                    $DBC = mysqli_connect($servername, $username, $password);

                    if (!$DBC) {
                        die("Connection failed: " . mysqli_connect_error());
                    } else {
                        echo "<p>Connected successfully</p>";
                        if (empty($_POST['NAME'])) {
                            echo 'Enter a country name!';
                        } else {
                            $db = "HOIIVSA";
                            $name = $_POST['NAME'];
                            $mil = $_POST['MILITARY'];
                            $civ = $_POST['CIVILIAN'];
                            $nav = $_POST['NAVAL'];
                            $con = $_POST['CONVOYS'];
                            $ali = $_POST['ALIGNMENT'];
                            $sql = "INSERT INTO COUNTRY(NAME, MILITARY, CIVILIAN, NAVAL, CONVOYS, ALIGNMENT) VALUES('$name', '$mil', '$civ', '$nav', '$con', '$ali')";
                            mysqli_select_db($DBC, $db);
                            $result = mysqli_query($DBC, $sql);
                            if (!$result) {
                                die("Could not enter the data.");
                            } else {
                                echo 'The country was added to the database!';
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
