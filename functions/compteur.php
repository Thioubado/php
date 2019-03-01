<?php
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'header.php';
    function ajouter_vue(){
        $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'compteur';
        if(file_exists($fichier)){
            // Si le fichier existe on incrémente
            $compteur = (int)file_get_contents($fichier);
            $compteur++;
            file_put_contents($fichier, $compteur);
        }
        else{
            //sinon on crée le fichier avec la valeur 1
            file_put_contents($fichier, '1');
        }
    }

    