<?php

class Reservation{
    private DateTime $_dateDebut;
    private DateTime $_dateFin;
    private Client $client; 
    private Hotel $hotel;
    private Chambre $chambre;
    private array $_reservations;
    
    public function __construct($dateDebut,$dateFin,$client,$hotel,$chambre){
        $this->_dateDebut = new DateTime($dateDebut); //ici on  attribut à la proprieté le format est une date 
        $this->_dateFin = new DateTime ($dateFin);//ici on  attribut à la proprieté le format est une date 
        $this->client = $client;
        // ici on fait appelle à la fonction ajout reservation de l'objet client(class client) 
        $client->ajouterReservation($this);
        $this->hotel = $hotel;
        // ici on fait appelle à la fonction ajout reservation de l'objet hotel(class hotel)
        $hotel->ajouterReservation($this);
        // ici on fait appelle à la fonction ajout  reservation de l'objet chambre (class chambre)
        $this->chambre= $chambre;
        $chambre->ajouterReservation($this);
        $this->_reservations=[];
        
    }


    /**
     * Get the value of _dateDebut
     */ 
    public function get_dateDebut()
    {
        return $this->_dateDebut;
    }

    /**
     * Set the value of _dateDebut
     *
     * @return  self
     */ 
    public function set_dateDebut($_dateDebut)
    {
        $this->_dateDebut = $_dateDebut;

        return $this;
    }

    /**
     * Get the value of _dateFin
     */ 
    public function get_dateFin()
    {
        return $this->_dateFin;
    }

    /**
     * Set the value of _dateFin
     *
     * @return  self
     */ 
    public function set_dateFin($_dateFin)
    {
        $this->_dateFin = $_dateFin;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of hotel
     */ 
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set the value of hotel
     *
     * @return  self
     */ 
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get the value of chambre
     */ 
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set the value of chambre
     *
     * @return  self
     */ 
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function ajouterReservation(Reservation $reservation){
        $this->_reservations[] =$reservation;

    }



    public function afficherResa() {
        /*On crée uen fonction qui affiche le sinfo de la reservation. 
        ATT: pour l'affichage des dates, il faut inclure "format", sinon l'ordinateur sera incapable d'afficher les dates */
        return "-".$this->client." Chambre ".$this->chambre ." du ".$this->_dateDebut->format('d-m-Y')." au ".$this->_dateFin->format('d-m-Y')." ".$this->hotel."<br>";
        foreach($this->_reservations as $reservation){
            echo $reservation;
        }
            echo "Aucune réservation !";
    
    }

    public function __toString(){
        return 
        $this->_dateDebut." "
        .$this->_dateFin." "
        .$this->client ." "
        .$this->hotel ." "
        .$this->chambre ." ";
    }






}

?>
