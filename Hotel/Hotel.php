<?php
class Hotel{
    private string $_nomHotel;
    private string $_nbEtoile;
    private string $_ville;
    private string $_adresse;
    private array $_chambres;
    private array $_reservations;
   
    

    public function __construct($nomHotel,$nbEtoile,$ville,$adresse){
        $this->_nomHotel= $nomHotel;
        $this->_nbEtoile =$nbEtoile;
        $this->_ville=$ville; 
        $this->_adresse = $adresse;
        $this->_chambres = [];
        $this->_reservations=[];
    }
    
   
    public function getNomHotel(){
        return $this->_nomHotel;
    }

   
    public function setNomHotel($nomHotel){
        $this->_nomHotel = $nomHotel;
        return $this;
    }

    
    public function get_nbEtoile(){
        return $this->_nbEtoile;
    }


    public function set_nbEtoile($_nbEtoile){
        $this->_nbEtoile = $_nbEtoile;
        return $this;
    }

   
    public function get_ville()
    {
        return $this->_ville;
    }

   
    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }


    public function get_adresse(){
        return $this->_adresse;
    }

    public function set_adresse($_adresse){
        $this->_adresse = $_adresse;

        return $this;
    }

    public function get_chambres(){
        return $this->_chambres;
    }

    public function set_chambres($_chambres){
        $this->_chambres = $_chambres;
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


    public function calculerChambreDispo (){
        // 1) compter le nb de chambre dans l'hotel count ($this->chambres)
        // 2) compter le nb de chambre reservés   count ($this->reservations)
        // 3) soustration entre les 2 count ($this->chambres) - count ($this->reservations)
        // 4) return $chambreDispo 
         $chambreDispo= count($this->_chambres)- count($this->_reservations);
         return $chambreDispo; 
        
    }

    public function ajouterChambre(Chambre $chambre){
        $this->_chambres[] =$chambre;

    }

    public function afficherChambres(){
        foreach($this->chambres as $hotel){
            echo $hotel;
        }
    }

    public function ajouterReservations(Reservation $reservation){
        $this->_reservations[] =$reservation;

    } 

    public function afficherReservations(){
        foreach($this->reservations as $reservation){
            echo $reservation;
         }
 
    }

    public function nbReservations(){
        $nbChambreReservees = count($this->_reservations);
        $nbChambreDispos = 0;
        
        if (count($this->_chambres) != 0){
            echo $nbChambreReservees  ;
            
        }else{
            echo " Aucune réservation ";
        }
    }

    
    public function afficherHotel(){

        //quand il y a tableau pour afficher le nombre qui ets à l'interieur, il faut inclure "count"
        return $this->_adresse."<br> Nombre de chambres: ".count($this->_chambres)."<br> Nombre de chambres reservées: ".count($this->_reservations)."<br> Nombre de chambres dispo: ".$this->calculerChambreDispo()."<br>";
    }

    

    public function __toString(){
        return $this->_nomHotel;
    }

} 

?>
   
