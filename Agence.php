<?php 
class Agence {
    public $nom;
    public $lieu;
    public $liste_circuits=array();
    public $liste_inscrits=array();


    function ajouterCircuit($c) {
        array_push($this->liste_circuits, $c);
    }

    function ajouterInscrit($c) {
        array_push($this->liste_inscrits, $c);
    }

    function lister_circuits() {
        foreach ($this->liste_circuits as $circuit) {
            echo $circuit->destination . "<br>";
        }
    }

    function lister_clients() {
        foreach ($this->liste_inscrits as $inscrit) {
            echo $inscrit->nom . "<br>";
        }
    }

}



?>