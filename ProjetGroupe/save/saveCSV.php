<?php
include("../verif.php");
$data = [];
// $handle = fopen("data.csv");
if (($handle = fopen("../data/data.csv", "r")) !== FALSE) {
    while (($personne = fgetcsv($handle, 0, ",")) !== FALSE) {
        $data[] = $personne;
    }
    fclose($handle);
}

$data[] = [
    htmlentities($_POST["nom"]),
    htmlentities($_POST["prenom"]),
    htmlentities($_POST["email"]),
    htmlentities($_POST["dob"]),
    password_hash($_POST["pwd"], PASSWORD_DEFAULT),
    htmlentities($_POST["genre"]),
    htmlentities($_POST["nat"]),
    htmlentities($_POST["com"])
];

if (($handle = fopen("../data/data.csv", "w")) !== FALSE) {
    foreach($data as $d){
        fputcsv($handle, $d);
    }
    fclose($handle);
}

header("Location: ../formulaire.php?result=ok");
exit;