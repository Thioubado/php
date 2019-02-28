<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions utilisateurs</title>
</head>
<body>
    <h1>Les fonctions utilisateurs</h1>
    <h2>Exemple 1</h2>
    
    <?php

        function bonjour($nom)
        {
            return 'Bonjour ' .$nom. "<br>";
        }

        $salutation = bonjour('jean');
        echo bonjour('Aziz');

    ?>
    <h2>Exemple 2</h2>
    <?php
        $nom = "Seck";
        function bonsoir($prenom = null)
        {
            global $nom;
            return 'Bonsoir ' . (($prenom === null)?'':$prenom .  " " . $nom) .  '<br>';
        }
        echo bonsoir();
        echo bonsoir('Moh');
    ?>
    
</body>
</html>