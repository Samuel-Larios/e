<?php

// Création de la classe personne 
class Personne{
    private $nom;
    private $prenom;
    private $age;


    // Création des seters
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setAge($age){
        if (is_numeric($age)) {
            $this->age = $age;
        }
        else {
            echo "Erreur d'age!";
        }
        
    }

    // Création des getters
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getAge(){
        return $this->age;
    }

    // Création de la méthode marcher
    public function marcher(){
        echo $this->prenom .' '. $this->nom .' est entrain de marcher';
    }

    // Création de la methode parler
    public function parler(){
        echo $this->getPrenom() .' est entrain de parler';
    }
} 