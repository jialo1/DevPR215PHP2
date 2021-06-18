<?php
    class Patient
    {
       private $id;
       private $prenom;
       private $nom;
       private static $nombrePatients = 0;

       function __construct($id, $prenom, $nom)
       {
           $this->id = $id;
           $this->prenom = $prenom;
           $this->nom = $nom;
           self::$nombrePatients++;
       }

       public function getId()
       {
           return $this->id;
       }

       public function getPrenom()
       {
           return $this->prenom;
       }

       public function getNom()
       {
           return $this->nom;
       }

       public function setId($id)
       {
           $this->id = $id;
       }

       public function setPrenom($prenom)
       {
           $this->prenom = $prenom;
       }

       public function setNom($nom)
       {
           $this->nom = $nom;
       }

       public static function getNombrePatients()
       {
           return self::$nombrePatients;
       }

       function __toString()
        {
            return "Id: ".$this->getId()."</br>
            Prenom: ".$this->getPrenom()."</br>
            Nom: ".$this->getNom()."</br>
            ===============================================================<br/>";
        }
    }
    
    //Instanciation de la classe Patient
    $patient = new Patient(1, "Ali", "FALL");
    $patient1 = new Patient(2, "Amin", "AHMAD");
    $patient2 = new Patient(3, "Mohamed", "BA");
    
    echo $patient;
    echo $patient1;
    echo $patient2;

    $patient->setId(5);
    $patient->setPrenom("Amine");
    $patient->setNom("ALAHMAD");
    echo "(modifie)</br>".$patient;
    
    echo "Nombre de patients enregistres: ".Patient::getNombrePatients()."<br/>";