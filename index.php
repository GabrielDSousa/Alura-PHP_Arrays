<?php

use ClassLessons\ArrayUtils;
use ClassLessons\Calculator;

require 'autoloader.php';

//first lesson
$report = [6,7,8,7,8,5,9];
$calc = new Calculator();
$average = $calc->average($report);

//second lesson
$names = "Gabriel, Ana, Clara, Igor, Bernardo";
$names_array = explode(', ',$names);
$report_imploded = implode(', ',$report);

//third lesson
$psychotic_array = ["Giovanni", "John", 12, "Maria", 25, "Luis", "Luisa", "12", "Rafael"];
$psychotic_array = ArrayUtils::remove("Giovanni", $psychotic_array);
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>Php Arrays</h1>
    <h2>First lesson, create a school report average calculator:</h2>
    <p>The <b>average</b> of the school report is: <?=$average?></p>
    <br><br>
    <h2>Second lesson, explode and implode:</h2>
    <h3>Explode</h3>
    <br>
    <h4>A string of name exploded as array, and iterated</h4>
    <ul>
        <?php foreach ($names_array as $name){?>
            <li>Hi,<?=$name?></li>
        <?php } ?>
    </ul>
    <h3>Implode</h3>
    <br>
    <p>School report imploded in a string: <?=$report_imploded?></p>
    <br><br>
    <h3>Third lesson, removing a element  of a array</h3>
    <p>The array is a psychotic thing like: ["Giovanni", "John", 12, "Maria", 25, "Luis", "Luisa", "12", "Rafael",]</p>
    <ul>
        <li>Removing the "Giovani"</li>
            <p><b>
                <?php
                foreach ($psychotic_array as $item){
                    echo "$item, ";
                }
                ?>
            </b></p>

        <li>Removing the "12", not the 12</li>
            <p><b>
                <?php
                $psychotic_array = ArrayUtils::remove("12", $psychotic_array);
                foreach ($psychotic_array as $item){
                    echo "$item, ";
                }
                ?>
            </b></p>

        <li>Removing the 12, not the "12"</li>
            <p><b>
                <?php
                $psychotic_array = ArrayUtils::remove(12, $psychotic_array);
                foreach ($psychotic_array as $item){
                    echo "$item, ";
                }
                ?>
            </b></p>
    </ul>




</body>
</html>
