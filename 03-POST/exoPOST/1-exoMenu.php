<?php 

/*

    EXERCICE POST :
            Choix plat au restaurant : 

                Etapes : 
                    - 1 Créer un form en POST avec simplement un champ select (liste deroulante) avec plusieurs choix de plat possible puis un bouton de validation
                    - 2 Traiter la réponse en exploitant POST puis en affichant un message indiquant le choix de l'utilisateur

*/
var_dump($_POST);

$content = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["plat"])) {
    $plat = htmlspecialchars($_POST["plat"]);
    $content = "
    <div class='card'>
        <div class='card-header bg-sucess text-white'>
            <h5>Information reçue</h5>
        </div>
        <div class='card-body'>
            <p><strong> Votre plat choisi est : </strong> $plat </p>
        </div>
    </div> ";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoMenu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3> Votre choix</h3>
                <from action="" method="POST" class="mb-4">
                    <div class="mb-3">
                        <label for="plat" class="form-label">Choix du plat</label>
                        <select id="plat" name="plat" class="form-control">
                            <option value="">--- Ajouter un plat ---</option>
                            <option value="cantonais">Riz cantonais</option>
                            <option value="nouilles">Nouilles sauté</option>
                            <option value="maki">Makis</option>
                            <option value="nems">Nems</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </from>
                <?= $content ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>