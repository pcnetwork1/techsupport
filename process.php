<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokusaj ovo</title>
</head>
<body>
<?php

$uredjaj = $_GET['uredjaj'];

echo "Jesi probao iskljućit i uključit $uredjaj?";
?>
<h1>I da li je pomoglo?</h1>

<input type="button" value="Da" onclick="location='YW.php'" />
<input type="button" value="Ne" onclick="location='Drugo.php'" />

</body>
</html>


