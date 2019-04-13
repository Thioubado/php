<?php

/*
 * Ce fichier est la propriété de C57.fr
 *
 * (c) Membre@c57.fr - 2019
 *
 * Et C57... C'est à VOUS !
 *
 * Sérieusement, ce fichier source est sujet à la license MIT*.
 * Mais je compte sur vous pour toujours chercher à l'améliorer et à votre tour, en faire profiter
 * un max de monde grâce aux techniques offertes dans c57.fr.
 *
 * @Bi1tô, & Bon code !
 *
 *  *: En gros...: Vous en faites ce que vous voulez !!!
 */

require dirname(__DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Creneau.php';
$creneau = new Creneau(9, 12);
//$creneau -> debut = 9;
//$creneau -> fin = 12;
$creneau2 = new Creneau(14, 16);
//var_dump($creneau, $creneau2);

$creneau->intersect($creneau2);

echo $creneau->toHTML();
var_dump(
    //$creneau->inclusHeure(10),
    //$creneau2->inclusHeure(10)

    $creneau->intersect($creneau2)
);
