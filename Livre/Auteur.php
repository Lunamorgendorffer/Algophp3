<?php
/*
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. 

*/

class Auteur {
    private $_nom;
    private $_prenom;
    private $bibliographie = [];
  
    public function __construct($nom, $prenom) {
      $this->_nom = $nom;
      $this->_prenom = $prenom;
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

    public function ajouterLivre (Livre $livre) {
        $this->bibliographie[]= $livre;
    }
  

    function afficherBibliographie() {
        echo "<br> Bibliographie de" .$this->_prenom. " " .$this->_nom.   ": <br>" ;
        foreach ($this->bibliographie as $livre) {
          echo '- ' . $livre . "<br>";
        }
    }

}



?>