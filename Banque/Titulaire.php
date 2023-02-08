<?php
class titulaire{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_ville;
    private $_comptesBancaires = [];

    public function __construct($prenom,$nom,$dateNaissance, $ville,$comptesBancaires) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance=$dateNaissance;
        $this->_ville=$ville;
        $this->_comptesBancaires=$comptesBancaires;
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

    public function __toString() {
        return $this->_prenom . " " . $this->_nom ." né(e) le " . $this->_dateNaissance . 
        " et habite à" .$this->_ville.", n° compte bancaire" . $this->_comptesBancaires."<br>";
    }
}

$titulaireA = new titulaire("Jon","Snow","07/02/1993","TheWall","banquepopulaire");
//var_dump($titulaireA);
echo $titulaireA ;
$titulaireB = new titulaire("Eren","Jager","22/11/2001","Shiganshina","Caisse d'epargne");
echo $titulaireB;