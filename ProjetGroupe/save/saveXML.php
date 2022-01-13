<?php
include("../verif.php");

$data = [];
if (file_exists('../data/data.xml')) {
    $personnes = simplexml_load_file('../data/data.xml');
    $i = count($personnes->personne);
    $personnes->personne[$i]->nom = $_POST["nom"];
    $personnes->personne[$i]->prenom = $_POST["prenom"];
    $personnes->personne[$i]->email = $_POST["email"];
    $personnes->personne[$i]->dob = $_POST["dob"];
    $personnes->personne[$i]->pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
    $personnes->personne[$i]->genre = $_POST["genre"];
    $personnes->personne[$i]->nat = $_POST["nat"];
    $personnes->personne[$i]->com = $_POST["com"];
    $personnes->asXML('../data/data.xml');
} 
header("Location: ../formulaire.php?result=ok");
exit;