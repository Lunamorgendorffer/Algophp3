<?php
include "Titulaire.php";

class compteBancaire {
    private $_libelle;
    private $_soldeInital;
    private $_deviseMonetaire;
    private $_titulaireUnique;

    public function __construct($libelle, $soldeInital, $deviseMonetaire, $titulaireUnique ) {
        $this->_libelle = $libelle;
        $this->_soldeInital =$soldeInital;
        $this->_deviseMonetaire=$deviseMonetaire;
        $this->_titulaireUnique=$titulaireUnique;
        
    }

    public function get_libelle() {
        return $this->_libelle;
    }

    public function get_soldeInitial() {
        return $this->_soldeInitial;
    }
    
    public function get_deviseMonetaire(){
        return $this->_deviseMonetaire;
    }
    public function get_titulaireUnique(){
        return $this->_titulaireUnique;
    }
    
    public function set_libelle($_libelle){
        $this->_libelle=$_libelle;
    }

    public function set_soldeInitial($_soldeInital){
        $this->_soldeInitial=$_soldeInital;
    }

    public function set_deviseMonetaire($_deviseMonetaire){
        $this->_deviseMonetaire;
    }
    public function set_titulaireUnique($_titulaireUnique){
        $this->_titulaireUnique;
    }

    public function __toString() {
        return $this->_titulaireUnique .": " .$this->_libelle . " a un solde de " . $this->_soldeInitial ." " . $this->_deviseMonetaire. "<br>";
    }

    public function crediter($montant) {
        $this->soldeInitial += $montant;
    }

    public function debiter($montant) {
        //On verifie qu'on a un solde suffisant pour debiter 
        if ($this->soldeInitial - $montant >= 0) {
           //On deduit le montant du solde
            $this->soldeInitial -= $montant;
        } else { // si le solde est insuffisant , on ne deduit pas 
            echo "Solde insuffisant.";
        }
    }
    public function virement(titulaire $comptesBancaires, $montant){
        //1) On verifie qu'on a un solde suffisant pour debiter 
        if($this->soldeInitial - $montant >= 0){
             //2)On deduit le montant du compteA
             $compteA->debiter ($montant);
            //3) On rajoute le montant au compteB
            $CompteB->crediter($montant);
        } else {
            echo "Impossible de realiser le virement car le solde est insuffisant.";
        }
    }

    Public function afficherCompte(){
        foreach($this->_comptesBancaires as $comptesBancaire){
            echo '- ' . $comptesBancaire . "<br>";
        }


    }

    /*
     function afficherBibliographie() {
        echo "<br> Bibliographie de" .$this->_prenom. " " .$this->_nom.   ": <br>" ;
        foreach ($this->bibliographie as $livre) {
          echo '- ' . $livre->__toString() . "<br>";
            
        }
    }
    */

}


$compteA = new compteBancaire ("compte courant", "200", "€",$titulaireA);
$compteB = new compteBancaire ("compte courant", "50", "€",$titulaireB);

echo $compteA;
echo $compteB;
?>