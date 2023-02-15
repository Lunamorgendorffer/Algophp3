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

    //Fonctions GET & SET des propriétes 
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


        return $this->_reservations;
    }

     
    public function set_reservation($_reservations)
    {
        $this->_reservations = $_reservations;

        return $this;
    }

    // fonct° AddReservation un objet qui va permettre d'ajoute une reservation au client 
    // on pour pourra l'appeler dans chambre et hotel 
    public function ajouterReservations(Reservation $reservation){
        $this->_reservations[] =$reservation;

    }

    // fonction qui permett de calculer le prix de toutes les reservations 
    public function totalReservations(){
        $somme=0;
        foreach ($this->_reservations as $reservation){
            // de la reservation, on va chercher la classe chambre (et comme on acces à la classe Chambre dans la classe reservation) , 
            //on a acces au propriété de la classe chambre = chainage 
            $somme+=$reservation->getChambre()->get_prix();
        }
        return $somme;
    }

    

    public function __toString() {
        return $this->_prenom . " " . $this->_nom;
    }


}
?>