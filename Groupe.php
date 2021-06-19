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
        private $filiere;
        private $anneeAcademique;

        function __construct($id, $nom, $niveauEtude, Filiere $filiere, AnneeAcademique $anneeAcademique)
        {
        $this -> id = $id;
        $this -> niveauEtude = $niveauEtude;
        $this -> nom = $nom;
        $this -> filiere = $filiere;
        $this -> anneeAcademique = $anneeAcademique;
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

        public function getFiliere()
        {
            return $this->filiere;
        }

        public function getAnneeAcademique()
        {
            return $this->anneeAcademique;
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

        public function setFiliere(Filiere $filiere)
        {
            $this->filiere = $filiere;
        }

        public function setAnneeAcademique(AnneeAcademique $anneeAcademique)
        {
            $this->anneeAcademique = $anneeAcademique;
        }

        function __toString()
        {
            return "Nom du groupe: ".$this->getNom()."</br>
            Niveau d'etude: ".$this->getNiveauEtude()."</br>
            Filiere : ".$this->filiere->getNom()."</br>
            Annee Academique: ".$this->anneeAcademique->getDesignation()."</br>
            ===============================================================<br/>";
        }
    }

    //Test
    $filiere = new Filiere(1, "Programmation", "Programmation et developpement d'application web et mobile");
    $anneeAcademique = new AnneeAcademique(1, "2020-2021");
    $groupe = new Groupe(1, "PR-215", "Licence 2", $filiere, $anneeAcademique);

    echo $groupe;