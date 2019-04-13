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

class Creneau
{
    public $debut;

    public $fin;

    // Une methode c'est une fonction à l'intérieur d'une classe
    public function __construct(int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin   = $fin;
    }

    public function toHTML(): string
    {
        return "<strong>{$this->debut}</strong> à <strong>{$this->fin}</strong><hr>";
    }

    public function inclusHeure(int $heure): bool
    {
        return $heure >= $this->debut && $heure <= $this->fin;
    }

    public function intersect($creneau): bool
    {
        return $this->inclusHeure($creneau->debut) ||
        $this->inclusHeure($creneau->fin) ||
        ($this->debut < $creneau->debut && $this->fin > $creneau->fin);
    }
}
