<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <title>HOTEL</title>
</head>
<body>
<?php
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$hotel1= new Hotel("Hilton","****","Strasbourg","10 rue de la Gare 67000 Strabsourg");
$hotel2= new Hotel("Regent","****","Paris","61 Rue Dauphine 75006 Paris");

$client1= new Client ("Virgile","GIBELLO");
$client2= new Client ("Micka","MURMANN");

$chambre1= new Chambre ("1","2",false,$hotel1,120,false);
$chambre2= new Chambre ("2","2",false,$hotel1,120,false);
$chambreA= new Chambre ("17","1",TRUE,$hotel1,300,true);
$chambreB= new Chambre ("3","2",false,$hotel1,120,true);
$chambreC= new Chambre ("4","2",false,$hotel1,120,true);
$chambre16= new Chambre ("16","2",true,$hotel1,300,false);
$chambre18= new Chambre ("18","2",true,$hotel1,300,false);
$chambre19= new Chambre ("19","2",true,$hotel1,300,false);

$resa1= new Reservation("01-01-2021","01-01-2021",$client1,$hotel1,$chambreA);
$resa2= new Reservation("11-03-2021","11-03-2021",$client2,$hotel1,$chambreB);
$resa3= new Reservation("01-04-2021","01-04-2021",$client2,$hotel1,$chambreC);

$chambres = array($chambre1,$chambre2,$chambreA, $chambreB,$chambreC, $chambre16,$chambre18,$chambre19);



// echo $chambreA->afficherChambre();
// echo $resa1-> afficherResa();
// echo $resa2-> afficherResa();
?>

<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"><?php echo $hotel1->getNomHotel().$hotel1->get_nbEtoile().$hotel1->get_ville() ?></h3>
    <p><?php echo $hotel1->afficherHotel()?></p><br>
</div>
<div>
    <h3>Reservation de l'hotel <?php echo $hotel1->getNomHotel().$hotel1->get_nbEtoile().$hotel1->get_ville() ?></h3>
    <p uk-margin>
    <button class="uk-button uk-button-primary uk-button-small"><?php echo $hotel1->get_reservations()?> Réservations</button>
    </p>
    <div>
    <?php 
    echo $resa1-> afficherResa();
    echo $resa2-> afficherResa();
    echo $resa3-> afficherResa();
    ?><br>
    </div>
</div>
<div>
    <h3>Reservation de l'hotel <?php echo $hotel2->getNomHotel().$hotel2->get_nbEtoile().$hotel2->get_ville() ?></h3>
    <div>
    <?php echo $hotel2->get_reservations()?>
    </div>
</div>

<div>
<br><h3>Reservation de  <?php echo $client2 ?></h3>
    <p uk-margin>
        <button class="uk-button uk-button-primary uk-button-small"><?php echo count($client2->get_reservations())?> Réservations</button>
    </p>
    <div>
        <p>
        <strong>Hotel <?php echo $hotel1->getNomHotel().$hotel1->get_nbEtoile().$hotel1->get_ville() ?></strong> /
        <?php echo $chambreB->afficherChambre();?><br>
        <strong>Hotel <?php echo $hotel1->getNomHotel().$hotel1->get_nbEtoile().$hotel1->get_ville() ?></strong> /
        <?php echo $chambreC->afficherChambre();?><br>
        Total: <?= $client2->totalReservations();?> €
        </p><br>
    </div>
</div>
<div>
    <p>Statut des chambres de <strong><?php echo $hotel1->getNomHotel().$hotel1->get_nbEtoile().$hotel1->get_ville() ?></strong> </p>
    <table class="uk-table uk-table-striped">
        <thead>
            <tr>
                <th>CHAMBRE</th>
                <th>PRIX</th>
                <th>WIFI</th>
                <th>ETAT</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($chambres as $chambre){
                echo "<tr>",
                        "<td> Chambre " . $chambre->get_numChambre() . "</td>",
                        "<td>" . $chambre->get_prix() . "</td>",
                        "<td>" . $chambre->get_wifi() . "</td>",
                        "<td>" . $chambre->get_statut() . "</td>",
                    "</tr>";
            } 
            ?>
        </tbody>
    </table>

</div>

</body>
</html>
