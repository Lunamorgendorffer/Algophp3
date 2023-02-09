<?php
spl_autoload_register(function ($class_name) {
require_once $class_name . '.php';
});


$titulaireA = new Titulaire("Jon","Snow","07/02/1993","TheWall");
$titulaireB = new Titulaire("Eren","Jager","22/11/2001","Shiganshina");
$titulaireC = new Titulaire("Martin","Matin","10/08/1989","Union");
$titulaireD = new Titulaire("Pika","Chu","09/11/1971","Sepa");

$compteA = new CompteBancaire ("12345678901 (compte courant)", "200", "€",$titulaireA);
$compteB = new CompteBancaire ("76425590012 (Livret Jeune)", "50", "€",$titulaireB);
$compteC = new CompteBancaire ("12345678901 (PEL)", "4399", "€",$titulaireA);
$compteD = new CompteBancaire ("12345678901 (compte courant)", "1348", "€",$titulaireD);
$compteE = new CompteBancaire ("763005692712 (PEA)", "788", "€",$titulaireC);
$compteF = new CompteBancaire ("45670933301 (Livret A)", "316 ", "€",$titulaireD);



echo $titulaireA->afficherComptes();
echo "<hr>";
echo $titulaireB->afficherComptes();
echo "<hr>";
echo $titulaireC->afficherComptes();
echo "<hr>";
echo $titulaireD->afficherComptes();
echo "<hr>";

echo $compteA->debiter(30);
echo $compteA->get_soldeInitial();
echo "<hr>";
echo $compteB->crediter(50);
echo $compteB->debiter(200);
echo $compteB->get_soldeInitial();
echo "<hr>";
echo $compteF->debiter(375);
echo "<hr>";
echo $compteE->virement($compteF,105);




