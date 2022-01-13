<?php
include("../verif.php");

$data = json_decode(file_get_contents("../data/data.json"));
$data[] = [
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],
    "email" => $_POST["email"],
    "dob" => $_POST["dob"],
    "pwd" => password_hash($_POST["pwd"], PASSWORD_DEFAULT),
    "genre" => $_POST["genre"],
    "nat" => $_POST["nat"],
    "com" => $_POST["com"]
];
file_put_contents("../data/data.json", json_encode($data));
// var_dump(json_encode($data));
header("Location: ../formulaire.php?result=ok");
exit;