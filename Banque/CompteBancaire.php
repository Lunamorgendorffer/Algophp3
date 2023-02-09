<?php

class CompteBancaire {
    private string $_libelle;
    private float $_soldeInital;
    private string $_deviseMonetaire;
    private Titulaire $_titulaire;

    public function __construct($libelle, $soldeInital, $deviseMonetaire, $titulaire) {
        $this->_libelle = $libelle;
        $this->_soldeInital =$soldeInital;
        $this->_deviseMonetaire=$deviseMonetaire;
        $this->_titulaire=$titulaire;
        $this->_titulaire->ajouterComptes($this);
    }

    public function get_libelle() {
        return $this->_libelle;
    }

    public function get_soldeInitial() {
        return $this->_titulaire->get_prenom()." ".$this->_titulaire->get_nom().
        ": Le solde de votre compte " .$this->_libelle." est de ".$this->_soldeInital." ".$this->_deviseMonetaire."<br>";
    }
    
    public function get_deviseMonetaire(){
        return $this->_deviseMonetaire;
    }
    public function get_titulaire(){
        return $this->_titulaire;
    }
    
    public function set_libelle($_libelle){
        $this->_libelle=$_libelle;
    }

    public function set_soldeInitial($_soldeInital){
        $this->_soldeInital=$_soldeInital;
    }

    public function set_deviseMonetaire($_deviseMonetaire){
        $this->_deviseMonetaire;
    }
    public function set_titulaire($_titulaire){
        $this->_titulaire;
    }

    

    public function crediter($montant) {
        $this->_soldeInital += $montant;
        echo $this->_titulaire->get_prenom()." ".$this->_titulaire->get_nom()." - vous allez recevoir sur votre compte: ".$this->_libelle." " .$montant." ".$this->_deviseMonetaire. "<br>";
    }

    public function debiter($montant) {
        //On verifie qu'on a un solde suffisant pour debiter 
        if ($this->_soldeInital - $montant >= 0) {
           //On deduit le montant du solde
            $this->_soldeInital -= $montant;
            echo $this->_titulaire->get_prenom()." ".$this->_titulaire->get_nom(). " - nous allons deduire de votre compte ".$this->_libelle.": ".$montant." ".$this->_deviseMonetaire. "<br>";
        } else { // si le solde est insuffisant , on ne deduit pas 
            echo $this->_titulaire->get_prenom()." ".$this->_titulaire->get_nom()." - Solde insuffisant, vous avez pas le montant necessaire pour effectuer le prelevement.<br>";
        }
    }
    public function virement(CompteBancaire $compteDestination, $montant){
        //1) On verifie qu'on a un solde suffisant pour debiter 
        if($this->_soldeInital - $montant >= 0){
             //2)On deduit le montant du compteA
             $this->debiter($montant);
            //3) On rajoute le montant au compteB
            $compteDestination->crediter($montant);
        } else {
            echo $this->_titulaire->get_prenom()." ".$this->_titulaire->get_nom(). " - Impossible de realiser le virement car le solde est insuffisant.<br>";
        }
    }

    public function __toString() {
        return $this->_titulaire. "
        Compte n°" .$this->_libelle. " <br> 
        Solde " . $this->_soldeInital." " . $this->_deviseMonetaire ."<br>";

    }
}




?>