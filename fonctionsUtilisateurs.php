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
    <p>exemple 1</p>

    <?php

        //function bonjour($nom){
            //return 'Bonjour ' .$nom. "<br>";
       // }

        //$salutation = bonjour('jean');
        //bonjour('aziz');

    ?>
    <p>exemple 2</p>
    <?php
        $nom = "seck";
        function bonsoir($prenom = null){
            global $nom;
            if($prenom === null){
                return 'Bonsoir <br>';
            }
            return 'Bonsoir ' .$prenom.  " " .$nom.'<br>';
        }
        echo bonsoir($nom);
    ?>
    
</body>
</html>