<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php dans du code HTML</title>
</head>
<body>
    <h1>Php dans du code HTM</h1>
    <font size="4" face="Verdana"> le texte en HTML</font>
    <?php
    //Le code en php
    $heure = date("H:i");
    print $heure;
    ?>

    <br>
    <font size="6" face="Arial">A : <?= $heure ;?>, je suis en train de coder</font>
</body>
</html>