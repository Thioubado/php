<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les fonctions</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <p>exemple 1</p>
    <?php

        $mot = 'Moi';

        $reverse = strtolower(strrev($mot));
        
        if ($mot === $reverse) {
            echo 'C\est un palyndrome';
        } else {
            echo 'Ce n\'en est pas';
        }
    ?>
    <p>Exemple 2</p>
    <?php
       $notes = [10, 20, 13];
        $somme = array_sum($notes);
        $count = count($notes);

        echo "Vous avez ". round(($somme/$count), 2). " de moyenne";// Le chiffre 2 permet d'ajouter deux chiffres après la virgule

    ?>
    <p>Exemple 3</p>
    <?php
        $notes[] = 16;

        //la fonction array_push permet d'ajouter une note ou un élément dans un tableau
        array_push($notes, 16, 17);
        print_r($notes);

        
    ?>
    <p>exemple 4</p>
    <?php
        $insultes = ['merde', 'con'];
        $phrase = 'Ce con est une merde';
        foreach ($insultes as $insulte) {
            //trouver la première lettre
            $lettre = substr($insulte, 0, 1);
            
            //la taille de chaque mot du tableau
            $taille = strlen($insulte);

            //Remplacer par des astérix la longeur de chaque mot
            $replace = $lettre. str_repeat('*', $taille-1);
            //var_dump($replace);
            $phrase =  str_replace($insulte, $replace, $phrase);
        }
        echo $phrase;


    ?>
</body>
</html>