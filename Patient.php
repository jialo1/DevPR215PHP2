<?php
    class Patient
    {
       private $id;
       private $prenom;
       private $nom;

       function __construct($id, $prenom, $nom)
       {
           $this->id = $id;
           $this->prenom = $prenom;
           $this->nom = $nom;
       }

       function getId()
       {
           return $this->id;
       }
    }
    
    //Instanciation de la classe Patient
    $patient1 = new Patient(1, "Ali", "Fall");
    
    print($patient1->id)."<br/>";
    print($patient1->prenom)."<br/>";
    print($patient1->nom)."<br/>";