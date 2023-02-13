<?php
class Client{
    private string $_nom;
    private string $_prenom;
    private array $_reservations;
    

    public function __construct($prenom,$nom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_reservations=[];
       
        
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

    public function get_reservations()
    {

        // if($this->_reservations == true){
        //     return count ($this->_reservations);
        // }
        // return "Aucune reservation en cours !";

        return $this->_reservations;
    }

     
    public function set_reservation($_reservations)
    {
        $this->_reservations = $_reservations;

        return $this;
    }

    // fonct° AddReservation un objet qui va permettre d'ajoute une reservation au client 
    // on pour pourra l'appeler dans chambre et hotel 
    public function ajouterReservation(Reservation $reservation){
        $this->_reservations[] =$reservation;

    }

    

    public function __toString() {
        return $this->_prenom . " " . $this->_nom;
    }


}
?>