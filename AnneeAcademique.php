<?php

    class AnneeAcademique
    {
        private $id;
        private $designation;

        public function __construct($id, $designation)
        {
            $this-> id = $id;
            $this-> designation = $designation;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getDesignation()
        {
            return $this->designation;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setDesignation($designation)
        {
            $this->designation = $designation;
        }

        public function __toString()
        {
            return "Anne Academique: $this->designation";
        }
    }