<?php
require 'Calculator.php';
$report = [6,7,8,7,8,5,9];
$calc = new Calculator();
$average = $calc->average($report);
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
</body>
</html>
