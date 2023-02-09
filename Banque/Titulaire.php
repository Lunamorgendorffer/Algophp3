<?php
class Titulaire{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_ville;
    private array $_comptesBancaires ;

    public function __construct($prenom,$nom,$dateNaissance, $ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance=$dateNaissance;
        $this->_ville=$ville;
        $this->_comptesBancaires= [];
    }

    public function get_nom() {
        return $this->_nom;
    }
  
    public function set_nom($_nom){
        $this->_nom=$_nom;
    }
    
    public function get_prenom() {
        return $this->_prenom;
    }

    public function set_prenom($_prenom){
        $this->_prenom=$_prenom;
    }

    public function get_dateNaissance(){
        return $this->_dateNaissance;
    }
    public function get_ville(){
        return $this->_ville;
    }
    public function get_comptesBancaires(){
        return $this->_comptesBancaires;
    }

    public function set_dateNaissance($_dateNaissance){
        $this->_dateNaissance;
    }
    public function set_ville($_ville){
        $this->_ville;
    }
    public function set_comptesBancaires($_comptesBancaires){
        $this->_comptesBancaires;
    }

    public function ajouterComptes (compteBancaire $compte) {
        $this->_comptesBancaires[]= $compte;
    }
        //fonction pour afficher les comptes 
    Public function afficherComptes(){
        echo "<br> <strong>Releve d'identité bancaire: </strong><br>" ;
        foreach($this->_comptesBancaires as $compte){
            echo  $compte . "<br>";
        }
    }


    public function __toString() {
        return $this->_prenom . " " . $this->_nom ."<br> 
        Né(e) le " . $this->_dateNaissance . "<br>
        Domiciliant à " .$this->_ville."<br>";
    }
}

