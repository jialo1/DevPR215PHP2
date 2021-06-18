<?php

class Badge
    {
        private $numInscription;
        private $matricule;
        private $filiere;
        private $groupe;
        private $anneeAcademique;
        private $prenom;
        private $nom;
        private static $nombreBadgeCree = 0; 

        function __construct($numInscription, $matricule, $filiere, $groupe, $anneeAcademique, $prenom, $nom)
       {
           $this->numInscription = $numInscription;
           $this->matricule = $matricule;
           $this->filiere = $filiere;
           $this->groupe = $groupe;
           $this->anneAcademique = $anneeAcademique;
           $this->prenom = $prenom;
           $this->nom = $nom;
           self::$nombreBadgeCree++;
       }

       public function getNumInscription()
       {
           return $this->numInscription;
       }

       public function getMatricule()
       {
           return $this->matricule;
       }

       public function getFiliere()
       {
           return $this->filiere;
       }

       public function getGroupe()
       {
           return $this->groupe;
       }

       public function getAnneAcademique()
       {
           return $this->anneeAcademique;
       }

       public function getPrenom()
       {
           return $this->prenom;
       }

       public function getNom()
       {
           return $this->nom;
       }

       public function setNumInscription($numInscription)
       {
           $this->numInscription = $numInscription;
       }

       public function setMatricule($matricule)
       {
           $this->matricule = $matricule;
       }

       public function setFiliere($filiere)
       {
           $this->filiere = $filiere;
       }

       public function setGroupe($groupe)
       {
           $this->groupe = $groupe;
       }

       public function setAnneeAcademique($anneeAcademique)
       {
           $this->anneeAcademique = $anneeAcademique;
       }

       public function setPrenom($prenom)
       {
           $this->prenom = $prenom;
       }

       public function setNom($nom)
       {
           $this->nom = $nom;
       }

       public static function getNombreBadgeCree()
       {
           return self::$nombreBadgeCree;
       }

       function __toString()
       {
           return "Numero d'inscription: ".$this->getNumInscription()."</br>
           Matricule: ".$this->getMatricule()."</br>
           Filiere: ".$this->getFiliere()."</br>
           Groupe: ".$this->getGroupe()."</br>
           Annee Academique: ".$this->getAnneAcademique()."</br>
           Prenom: ".$this->getPrenom()."</br>
           Nom: ".$this->getNom()."</br>
           ===============================================================<br/>";
       }
    }

    $badge = new Badge("L2PR266", "SIDK005276", "Programmation", "PR-215", "2020-2021", "Amine", "AHMAD");
    $badge1 = new Badge("L2PR278", "SIDK005116", "Programmation", "PR-215", "2020-2021", "San", "LAMAMBA");
    $badge2 = new Badge("L2PR261", "SIDK005209", "Programmation", "PR-215", "2020-2021", "Hamza", "SOUGOU");

    echo $badge;
    echo $badge1;
    echo $badge2;

    $badge->setNumInscription("L2PR255");
    $badge->setMatricule("SIDK005123");
    $badge->setFiliere("Programmation");
    $badge->setGroupe("PR-217");
    $badge->setAnneeAcademique("2020-2021");
    $badge->setPrenom("Amin");
    $badge->setNom("ALAHMAD");
    echo "(modifie)</br>".$badge;

    echo "Nombre de Badge cree: ".Badge::getNombreBadgeCree()."</br>";