<?php 
class Chambre{

    private string $_numChambre;
    private int $_nbLit;
    private bool $_wifi=false;
    private Hotel $hotel;
    private int $_prix;
    private array $_reservations; 

    
    public function __construct($numChambre,$nbLit,$wifi,$hotel,$prix){
        $this->_numChambre=$numChambre;
        $this->_nbLit=$nbLit;
        $this->_wifi= $wifi;
        $this->hotel=$hotel;
        /*Lorsque qu'on fait une resa, l'hotel affiche une liste de chambre dispo = tableau de chambre 
        Et quand on cree une chambre, il faut ajouter au tableau de chambre*/
        $hotel->ajouterChambre($this);
        $this->_prix= $prix;
        $this->_reservations=[];

    }

    public function get_numChambre()
    {
        return $this->_numChambre;
    }

    
    public function set_numChambre($_numChambre)
    {
        $this->_numChambre = $_numChambre;

        return $this;
    }

  
    public function get_nbLit()
    {
        return $this->_nbLit;
    }

    
    public function set_nbLit($_nbLit)
    {
        $this->_nbLit = $_nbLit;

        return $this;
    }

    
    public function get_wifi() {
        if($this->_wifi == false){
            return "non";
        } else {
            return "oui";
        }
    }

    
    public function set_wifi($_wifi)
    {
        $this->_wifi = $_wifi;

        return $this;
    }

    
    public function get_prix()
    {
        return $this->_prix;
    }

     
    public function set_prix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
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


    public function ajouterReservation(Reservation $reservation){
        $this->_reservations[] =$reservation;

    }

    public function afficherChambre(){
        return "Chambre: ".$this->_numChambre." (".$this->_nbLit." - ".$this->_prix." € - Wifi: ".$this->get_wifi() .")";
    }

    public function prixTotalChambre($total){
        //total = prix de la chambre1 + prix de la chambre2
        return $total = $this->_prix + $this->_prix;
        
    }

    public function __toString(){
        return $this->_numChambre." ";  
    }

}

?>