<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La concaténation</title>
</head>
<body>
    <h1>La concaténation en php</h1>
    <?php
        $nom = "SECK";
        $prenom = "Momo";
        echo $prenom. " ".$nom;
        $date = gmdate("h:i");
        echo $date. 'gmt <br>';
        $eleve = 'zicrou';
        echo "L'élève s'appelle $eleve";

    ?>

</body>
</html>