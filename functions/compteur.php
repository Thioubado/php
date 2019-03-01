<?php
    //require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'header.php';
    function ajouter_vue(){
        $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'compteur';
        $fichier_journalier = $fichier . '_' . date('Y-m-d');
        incrementer_compteur($fichier);
        incrementer_compteur($fichier_journalier);
    }

    function incrementer_compteur(string $fichier){
        $compteur = 1;
        if(file_exists($fichier)){
            // Si le fichier existe on incrémente
            $compteur = (int)file_get_contents($fichier);
            $compteur++;    
        }
        file_put_contents($fichier, $compteur);
    }

    function nombre_vue(){
        $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cli' . DIRECTORY_SEPARATOR . 'compteur';
        return file_get_contents($fichier); 
    }

    