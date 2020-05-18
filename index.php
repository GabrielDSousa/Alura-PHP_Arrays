<?php
require 'Calculator.php';
$report = [6,7,8,7,8,5,9];
$calc = new Calculator();
$average = $calc->average($report);
$names = "Gabriel, Ana, Clara, Igor, Bernardo";
$names_array = explode(', ',$names);
$report_imploded = implode(', ',$report);
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
    <h2>Second lesson, explode and implode:</h2>
    <h3>Explode</h3>
    <h4>A string of name exploded as array, and iterated</h4>
    <ul>
        <?php foreach ($names_array as $name){?>
            <li>Hi,<?=$name?></li>
        <?php } ?>
    </ul>
    <h3>Implode</h3>
    <p>School report imploded in a string: <?=$report_imploded?></p>

</body>
</html>
