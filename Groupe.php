<?php
    require_once('Filiere.php');
    require_once('AnneeAcademique.php');
    /**
     * represente un groupe
     */
    class Groupe
    {
        private $id;
        private $nom;
        private $niveauEtude;
        private static $nombreGroupeCree = 0 ;

        function __construct($id, $nom, $niveauEtude)
        {
        $this -> id = $id;
        $this -> niveauEtude = $niveauEtude;
        $this -> salle = $salle;
        $this -> nom = $nom;
        self::$nombreGroupeCree++;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getNiveauEtude()
        {
            return $this->niveauEtude;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function setNiveauEtude($niveauEtude)
        {
            $this->niveauEtude = $niveauEtude;
        }

        public static function getNombreGroupeCree()
        {
            return self::$nombreGroupeCree;
        }

        function __toString()
        {
            return "Id: ".$this->getId()."</br>
            Niveau d'etude: ".$this->getNiveauEtude()."</br>
            Nom du groupe: ".$this->getNom()."</br>
            ===============================================================<br/>";
        }
    }

$groupe = new Groupe(1, "L2", "PR-215");
$groupe1 = new Groupe(2, "L1", "PR-211");
$groupe2 = new Groupe(3, "L1", "PR-211");

echo $groupe;
echo $groupe1;
echo $groupe2;

$groupe->setId(1);
$groupe->setNiveauEtude("L2");
$groupe->setNom("PR-215");
echo "(modifie)</br>".$groupe;

echo "Nombre de Groupe crees: ".Groupe::getNombreGroupeCree()."<br/>";
