
<?php include 'Auteur.php';
/*
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. 

*/
class Livre{
    private string $_titre;
    private int $_nbPages;
    private int $_parution;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct($titre, $nbPages, $parution, $prix, $auteur){
        $this-> _titre = $titre;
        $this-> _nbPages = $nbPages;
        $this-> _parution = $parution;
        $this-> _prix = $prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivre($this);
    }

    public function get_titre (){
        return $this->_titre;

    }
    public function set_titre ($_titre){
        $this->_titre = $_titre;
    }

    public function get_nbPages (){
        return $this->_nbPages;

    }
    public function set_nbPages ($_nbPages){
        $this->_nbPages = $_nbPages;
    }

    public function get_parution (){
        return $this->_parution;

    }
    public function set_parution ($_parution){
        $this->_parution = $_parution;
    }

    public function get_prix (){
        return $this->_prix;

    }
    public function set_prix ($_prix){
        $this->_prix = $_prix;
    }

    public function get_auteur (){
        return $this->_auteur; 

    }
    public function set_auteur ($_auteur){
        $this->_auteur  = $_auteur ;
    }

    public function __toString() {
        return $this->_titre . " (" . $this->_parution .") : " . $this->_nbPages . "pages, prix: " . $this->_prix ." € <br>";
    }
}

$auteur= new Auteur('King', 'Stephen');

$livre1 = new Livre('Ca', 1138, 1986, 20, $auteur);
$livre2 = new Livre('Simetierre', 374, 1983, 15, $auteur);
$livre3 = new Livre('Le Fléau',823 , 1978, 14, $auteur);
$livre4 = new Livre('Shining', 447, 1977, 16, $auteur);

echo $auteur->afficherBibliographie();

?>