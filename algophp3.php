Exercice 1
<?php
?>

Exercice 2
<?php
/*
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer 
des livres et leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix 
et un auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
*/

class Auteur {
    private $_nom;
    private $_prenom;
  
    public function __construct($nom, $prenom) {
      $this->nom = $nom;
      $this->prenom = $prenom;
    }
  
    public function get_nom() {
      return $this->nom;
    }

    public function set_nom($_nom){
        $this->_nom=$_nom;
    }
  
    public function get_prenom() {
      return $this->prenom;
    }
    
    public function set_prenom($_prenom){
        $this->_prenom=$_prenom;
    }
  
    public function toString() {
      return $this->_prenom . ' ' . $this->_nom;
    }
}

class Livre{
    private $_tritre;
    private $_nbPages;
    private $_parution;
    private $_prix;
    private $_auteur;

    public function __construct($tritre, $nbPages, $parution, $prix, $auteur){
        $this-> _tritre = $tritre;
        $this-> _nbPages = $nbPages;
        $this-> _parution = $parution;
        $this-> _prix = $prix;
        $this->_auteur = $auteur;
    }

    public function get_titre (){
        return $this->_titre;

    }
    public function set_titre ($_titre){
        $this->_titre = $_titre;
    }

    public function get_nbPages (){
        return $this->_nbPages;

    }
    public function set_nbPages ($_nbPages){
        $this->_nbPages = $_nbPages;
    }

    public function get_parution (){
        return $this->_parution;

    }
    public function set_parution ($_parution){
        $this->_parution = $_parution;
    }

    public function get_prix (){
        return $this->_prix;

    }
    public function set_prix ($_prix){
        $this->_prix = $_prix;
    }

    public function get_auteur (){
        return $this->_auteur; 

    }
    public function set_titre ($_auteur){
        $this->_auteur  = $_auteur ;
    }

    public function toString() {
        return $this->titre . ', ' . $this->nbPages . ' pages, paru en ' . $this->anneeParution . ', prix : ' . $this->prix . '€, écrit par ' . $this->auteur->toString();
      }








}


?>