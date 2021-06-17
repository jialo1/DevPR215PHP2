<?php

class Groupe
{
    public $idgroupe;
    public $nombre_eleves;
    public $niveau_etude;
    public $salle;

    function __construct($idgroupe, $nombre_eleves, $niveau_etude, $salle)
    {
    $this -> idgroupe = $idgroupe;
    $this -> nombre_eleves = $nombre_eleves;
    $this -> niveau_etude = $niveau_etude;
    $this -> salle = $salle;
    }
}

$groupe1 = new Groupe("PR215", 17, "L2", "Centrino");
