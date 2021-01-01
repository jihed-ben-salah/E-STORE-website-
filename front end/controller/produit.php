<?php
    class Produit {
        public  ?int $idP = null;
        public  string $nomP;
        public  string $marqueP;
        public  string $modeleP;
        public  string $couleursP;
        public  string $tarifRP;
        public  string $tarifPP;
        public  string $tailleP;
        public  string $descriptifP;
        public  string $refP;  
        public  string $imageP;
        public  string $categoriesP;

        public function __construct ($nomP,$marqueP,$modeleP, $couleursP, $tarifRP, $tarifPP, $tailleP, $descriptifP,$refP,$imageP,$categoriesP){
           // $this->idP = $idP;
            $this->nomP = $nomP;
            $this->marqueP = $marqueP;
            $this->modeleP = $modeleP;
            $this->couleursP = $couleursP;
            $this->tarifRP = $tarifRP;
            $this->tarifPP= $tarifPP;
            $this->tailleP= $tailleP;
            $this->descriptifP= $descriptifP;
            $this->refP= $refP;
            $this->imageP= $imageP;
            $this->categoriesP= $categoriesP;

        }

        public function getIdP () {
            return $this->idP;
        }
        public function getNomP (){
            return $this->nomP;
        }

        public function getmarqueP (){
            return $this->marqueP;
        }

        public function getModeleP (){
            return $this->modeleP ;
        }

        public function getCouleursP (){
            return $this->couleursP ;
        }
        public function getTarifRP (){
            return $this->tarifRP ;
        }
        public function getTarifPP (){
            return $this->tarifPP ;
        }
        public function getTailleP (){
            return $this->tailleP ;
        }
        public function getDescriptifP (){
            return $this->descriptifP ;
        }
        public function getRefP (){
            return $this->refP ;
        }
        public function getImageP (){
            return $this->imageP ;
        }
        public function getCategoriesP (){
            return $this->categoriesP ;
        }

        public function setIdP () {
            $this->idP;
        }
        public function setNomP (){
            $this->nomP;
        }

        public function setmarqueP (){
            $this->marqueP;
        }

        public function setModeleP (){
            $this->modeleP ;
        }

        public function setCouleursP (){
            $this->couleursP ;
        }
        public function setTarifRP (){
            $this->tarifRP ;
        }
        public function setTarifPP (){
            $this->tarifPP ;
        }
        public function setTailleP (){
             $this->tailleP ;
        }
        public function setDescriptifP (){
            $this->descriptifP ;
        }
        public function setRefP (){
             $this->refP ;
        }
        public function setImageP (){
             $this->imageP ;
        }
        public function setCategoriesP (){
            $this->categoriesP ;
        }
    }
    ?>