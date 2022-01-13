<?php
    //JSON
    include("get/json.php");
    
    //CSV
    // include("get/csv.php");

    //XML
    // include("get/xml.php");

    //YAML
    // include("get/yaml.php");
    // Un petit test
    
    // var_dump($data);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/stylePerso.css">
    <title>formulaire</title>
</head>
<body>
    <fieldset>
        <legend>Listing</legend>
        <table id="listing">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Genre</th>
                    <th>Nationalité</th>
                    <th>Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // print_r($data);
                if(count($data)>0) {
                    foreach ($data as $personne) {
                        include("display/".$dis.".php");
                    }
                }
                ?>
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Genre</th>
                    <th>Nationalité</th>
                    <th>Commentaire</th>
                </tr>
            </tfoot>
        </table>
    </fieldset>
    <fieldset>
        <legend>Formulaire d'enregistrement</legend>
        <form action="save/<?php echo $f;?>" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom*</label>
                <input name="nom" required type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Prénom*</label>
                <input name="prenom" required type="text" class="form-control" id="exampleFormControlInput2" placeholder="prénom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Email*</label>
                <input name="email" required type="email" class="form-control" id="exampleFormControlInput3" placeholder="votre@email.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">Mot de passe*</label>
                <input name="pwd" required type="password" class="form-control" id="exampleFormControlInput4">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">Date de naissance*</label>
                <input name="dob" required type="text" class="form-control" id="exampleFormControlInput5">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="flexRadioDefault1" value="Agrafeuse">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Homme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="flexRadioDefault2" value="Radiateur">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femme
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="flexRadioDefault3" value="Radiateur">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Oui avec plaisir
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <select name="nat" class="form-select" aria-label="Default select example" required>
                    <option selected>Nationalité*</option>
                    <option value="FR">France</option>
                    <option value="PL">Pologne</option>
                    <option value="IT">Italie</option>
                    <option value="EU">Europe</option>
                    <option value="WO">Monde</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Commentaires*</label>
                <textarea name="com" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">S'enregistrer</button>
                <input type="reset" class="btn btn-secondary mb-3" value="Reset">
            </div>
        </form>
    </fieldset>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
    <script
			  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			  crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <script>
  $( function() {
    // $('#listing').DataTable();
    $( "#exampleFormControlInput5" ).datepicker({
        altField: "#exampleFormControlInput5",
        closeText: 'Fermer',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.',
        dateFormat: 'yy-mm-dd',
        firstDay: 1
        });
  } );
  </script>
</body>
</html>