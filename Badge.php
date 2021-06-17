<?php

class Badge
    {
        public $numInscription;
        public $matricule;
        public $filiere;
        public $groupe;
        public $anneeAcademique;
        public $prenom;
        public $nom;

        function __construct($numInscription, $matricule, $filiere, $groupe, $anneeAcademique, $prenom, $nom)
       {
           $this->numInscription = $numInscription;
           $this->matricule = $matricule;
           $this->filiere = $filiere;
           $this->groupe = $groupe;
           $this->anneAcademique = $anneeAcademique;
           $this->prenom = $prenom;
           $this->nom = $nom;
       }
    }

    $badge1 = new Badge("L2PR266", "SIDK005276", $filiere1, $groupe1, "2020-2021", "Amin", "ALAHMAD");

    print($badge1->numInscription)."<br/>";
    print($badge1->matricule)."<br/>";
    print($badge1->filiere->nom)."<br/>";
    print($badge1->groupe->idgroupe)."<br/>";
    print($badge1->anneeAcademique)."<br/>";
    print($badge1->prenom)."<br/>";
    print($badge1->nom)."<br/>";