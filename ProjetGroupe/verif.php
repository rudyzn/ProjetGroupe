<?php
if(empty($_POST)){
    header("Location: formulaire.php?result=ko");
    exit;
}
function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
$errors = [];
if(empty($_POST['nom'])){
    $errors["nom"] = "Le nom est obligatoire";
}
if(empty($_POST['prenom'])){
    $errors["prenom"] = "Le prénom est obligatoire";
}
if(empty($_POST['email'])){
    $errors["email"] = "L'email est obligatoire";
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors["email2"] = "L'email est mal formé";
}
if(empty($_POST['dob'])){
    $errors["dob"] = "La date de naissance est obligatoire";
}
if(!validateDate($_POST['dob'])){
    $errors["dob2"] = "La date de naissance est mal formée";
}
if(empty($_POST['pwd'])){
    $errors["pwd"] = "Le mot de passe ne peut pas être vide";
}
if(empty($_POST['genre'])){
    $errors["genre"] = "Le genre est obligatoire";
}
if(empty($_POST['nat']) || $_POST['nat'] == "Nationalité*"){
    $errors["nat"] = "La nationalité est obligatoire";
}
if(empty($_POST['com'])){
    $errors["com"] = "Merci de critiquer en lachant un commentaire";
}
if(!empty($errors)){
    //echo implode("<br>", $errors);
    $log = "[".date("Y-m-d H:i:s")."] - Validation de formulaire échoué : [ ".implode(" - ", $errors)."]\n";
    error_log($log, 3, "../data/log.txt");
    header("Location: ../formulaire.php?result=ok");
    exit;
} else {
    $log = "[".date("Y-m-d H:i:s")."] - Validation de formulaire réussi\n";
    error_log($log, 3, "../data/log.txt");
}