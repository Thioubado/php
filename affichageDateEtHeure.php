<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afficher une date et une heure en php</title>
</head>
<body>
    <h1>Afficher une date et une heure en php</h1>
    <?php
    $date = date("d-m-Y");
    echo "Nous sommes le " .$date. ".";

    $heure = date("H:i");
    
    echo " Il est : " .$heure;

    ?>
</body>
</html>