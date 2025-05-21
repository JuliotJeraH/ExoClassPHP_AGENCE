<?php 
require_once("Circuit.php");
require_once("Client.php");
require_once("Agence.php");

$Circuit1 = new Circuit("Andapa", 5, 500);
$Circuit2 = new Circuit("Sambava", 3, 300);
$Circuit3 = new Circuit("Antalaha", 7, 700);
$Circuit4 = new Circuit("Vohemara", 4, 400);
$Circuit5 = new Circuit("Diego", 6, 600);
$Circuit6 = new Circuit("Ambilobe", 8, 800);

$Client1 = new Client("Njiva", "njiva@gmail.com");
$Client2 = new Client("Rakoto", "rakoto@gmail.com");
$Client3 = new Client("Rabe", "rabe@gmail.com");

$Agence1 = new Agence();
$Agence1->nom = "Agence de Voyage";
$Agence1->lieu = "Antananarivo";


$Agence1->ajouterCircuit($Circuit1);
$Agence1->ajouterCircuit($Circuit2);
$Agence1->ajouterCircuit($Circuit3);
$Agence1->ajouterCircuit($Circuit4);
$Agence1->ajouterCircuit($Circuit5);
$Agence1->ajouterCircuit($Circuit6);


$Client1->reserverCircuit($Circuit3);
$Client1->reserverCircuit($Circuit2);
$Client2->reserverCircuit($Circuit1);
$Client2->reserverCircuit($Circuit4);
$Client3->reserverCircuit($Circuit5);


$Agence1->ajouterInscrit($Client1);
$Agence1->ajouterInscrit($Client2);
$Agence1->ajouterInscrit($Client3);


$Client2->annuler_reservation($Circuit4);

echo "<h2>Liste des circuits disponibles :</h2>";
$Agence1->lister_circuits();

echo "<h2>Liste des clients inscrits :</h2>";
$Agence1->lister_clients();

echo "<h2>Reçu des circuits réservés par chaque client :</h2>";
foreach ($Agence1->liste_inscrits as $client) {
    echo "<h3>Client: " . $client->nom . "</h3>";
    echo "Email: " . $client->email . "<br>";
    echo "Circuits réservés:<br>";
    foreach ($client->circuit_reserves as $circuit) {
        echo "- " . $circuit->details() . "<br>";
    }
    echo "Prix total: " . $client->prix_total() . " Ar<br>";
    echo "<hr>";
}

?>