<?php

class Filiere
    {
        private $id;
        private $nom;
        private $description;
        private static $nombreFiliereCree = 0;
        
        function __construct($id, $nom, $description)
        {
        $this-> id = $id;
        $this-> nom = $nom;
        $this-> description = $description;
        self::$nombreFiliereCree++;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getDescription()
        {
            return $this->description;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public static function getNombreFiliereCree()
        {
            return self::$nombreFiliereCree;
        }

        /**
         * Affichage des données
         * 
         * @return string
         */
        function __toString()
        {
            return "Id: ".$this->getId()."</br>
            Nom: ".$this->getNom()."</br>
            Description: ".$this->getDescription()."</br>
            ===============================================================<br/>";
        }
    }

    $filiere = new Filiere(1, "Programmation", "Programmation et developpement d'application web et mobile");
    $filiere1 = new Filiere(2, "Marketing", "Marketing et Communiction");

    echo $filiere."<br/>";
    echo $filiere1."<br/>";

    //modification des valeurs
    $filiere->setId(500);
    $filiere->setNom("GRH");
    $filiere->setDescription("Gestion des Ressources Humaines");
    echo $filiere;
    echo "Nombre de filiere cree: ".Filiere::getNombreFiliereCree()."<br/>";
    