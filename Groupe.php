<?php

class Groupe
    {
        private $id;
        private $niveauEtude;
        private $salle;
        private $nombreEtudiant;
        private static $nombreGroupeCree = 0 ;

        function __construct($id, $niveauEtude, $salle, $nombreEtudiant)
        {
        $this -> id = $id;
        $this -> niveauEtude = $niveauEtude;
        $this -> salle = $salle;
        $this -> nombreEtudiant = $nombreEtudiant;
        self::$nombreGroupeCree++;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNiveauEtude()
        {
            return $this->niveauEtude;
        }

        public function getSalle()
        {
            return $this->salle;
        }

        public function getNombreEtudiant()
        {
            return $this->nombreEtudiant;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setNiveauEtude($niveauEtude)
        {
            $this->niveauEtude = $niveauEtude;
        }

        public function setSalle($salle)
        {
            $this->salle = $salle;
        }

        public function setNombreEtudiant($nombreEtudiant)
        {
            $this->nombreEtudiant = $nombreEtudiant;
        }

        public static function getNombreGroupeCree()
        {
            return self::$nombreGroupeCree;
        }

        function __toString()
        {
            return "Id: ".$this->getId()."</br>
            Niveau d'etude: ".$this->getNiveauEtude()."</br>
            Salle: ".$this->getSalle()."</br>
            Nombre d'etudiants: ".$this->getNombreEtudiant()."</br>
            ===============================================================<br/>";
        }
    }

$groupe = new Groupe("PR215", "L2", "Centrino", 12);
$groupe1 = new Groupe("PR117", "L1", "Centrino", 17);
$groupe2 = new Groupe("PR118", "L1", "Reseau", 5);

echo $groupe;
echo $groupe1;
echo $groupe2;

$groupe->setId("PR-215");
$groupe->setNiveauEtude("L2");
$groupe->setSalle("Reseau");
$groupe->setNombreEtudiant(20);
echo "(modifie)</br>".$groupe;

echo "Nombre de Groupe crees: ".Groupe::getNombreGroupeCree()."<br/>";
