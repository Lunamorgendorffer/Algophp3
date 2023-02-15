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
    
    //Fonctions GET & SET des propriétes 
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
        $nbChambreReservees = count($this->_reservations);
        $nbChambreDispos = 0;
        
        if (count($this->_chambres) != 0){
            echo $nbChambreReservees  ;
            
        }else{
            echo " Aucune réservation ";
        }
    }

     
    public function set_reservation($_reservations)
    {
        $this->_reservations = $_reservations;

        return $this;
    }

    // fonction pour calculer le nombre de chambre dispo
    public function calculerChambreDispo (){
        // 1) compter le nb de chambre dans l'hotel count ($this->chambres)
        // 2) compter le nb de chambre reservés   count ($this->reservations)
        // 3) soustration entre les 2 count ($this->chambres) - count ($this->reservations)
        // 4) return $chambreDispo 
         $chambreDispo= count($this->_chambres)- count($this->_reservations);
         return $chambreDispo; 
        
    }
    //Fonction pour dès qu'on crée une chambre, celle ci va s'ajouter au tableau de chambre
    public function ajouterChambre(Chambre $chambre){
        $this->_chambres[] =$chambre;

    }
    //Fonction pour afficher chambre 
    public function afficherChambres(){
        foreach($this->chambres as $hotel){
            echo $hotel;
        }
    }
    
    //Fonction pour dès qu'on crée une reservation, celle ci va s'ajouter au tableau de reservation 
    public function ajouterReservations(Reservation $reservation){
        $this->_reservations[] =$reservation;

    } 
    //Fonction pour afficher les resa 
    public function afficherReservations(){
        foreach($this->reservations as $reservation){
            echo $reservation;
         }
 
    }

    //Fonction pour afficher info hotel 
    public function afficherHotel(){

        //quand il y a tableau pour afficher le nombre qui ets à l'interieur, il faut inclure "count"
        return $this->_adresse."<br> Nombre de chambres: ".count($this->_chambres)."<br> Nombre de chambres reservées: ".count($this->_reservations)."<br> Nombre de chambres dispo: ".$this->calculerChambreDispo()."<br>";
    }


    public function __toString(){
        return $this->_nomHotel;
    }

} 

?>
   
