<?php
include("../verif.php");

$data = yaml_parse_file("../data/data.yaml");
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
yaml_emit_file("../data/data.yaml", $data);
// var_dump(json_encode($data));
header("Location: ../formulaire.php?result=ok");
exit;