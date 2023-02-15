<?php 
class Chambre{

    private string $_numChambre;
    private int $_nbLit;
    private bool $_wifi=false;
    private Hotel $hotel;
    private int $_prix;
    private $_statut;
    private array $_reservations; 

    
    public function __construct($numChambre,$nbLit,$wifi,$hotel,$prix,$statut){
        $this->_numChambre=$numChambre;
        $this->_nbLit=$nbLit;
        $this->_wifi= $wifi;
        $this->hotel=$hotel;
        /*Lorsque qu'on fait une resa, l'hotel affiche une liste de chambre dispo = tableau de chambre 
        Et quand on cree une chambre, il faut ajouter au tableau de chambre*/
        $hotel->ajouterChambre($this);
        $this->_prix= $prix;
        $this->_statut= $statut;
        $this->_reservations=[];

    }

    //Fonctions GET & SET des propriétes 

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

    public function get_statut(){
        if ($this->_statut == true){
            return "<button class='uk-button uk-button-danger'>Réserver</button>";
        }else{
            return "<button class='uk-button uk-button-primary'>Disponible</button>";
        }
    }

    //Fonction pour dès qu'on crée une reservation, celle ci va s'ajouter au tableau de reservation 
    public function ajouterReservations(Reservation $reservation){
        $this->_reservations[] =$reservation;

    }

    //Fonction pour afficher les info de la chambre 
    public function afficherChambre(){
        return "Chambre: ".$this->_numChambre." (".$this->_nbLit." lit(s) - ".$this->_prix." € - Wifi: ".$this->get_wifi() .")";
    }


    public function __toString(){
        return $this->_numChambre." ";  
    }

}

?>