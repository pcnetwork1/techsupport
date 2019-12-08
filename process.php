<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokusaj ovo</title>
</head>
<body>
<div allign = "center" bold = "true">

<?php

$uredjaj = $_GET['uredjaj'];

echo "<b>Jesi probao iskljućit i uključit $uredjaj?</b>";

?>

</div>
<h1>I da li je pomoglo?</h1>

<?php
echo '<hr />';
?>
<input type="button" value="Da" onclick="location='YW.php'" />
<input type="button" value="Ne" onclick="location='Drugo.php'" />

</body>
</html>


