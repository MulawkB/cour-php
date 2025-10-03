
<?php 
/*

    EXERCICE : 
        La base de la manipulation de GET 
        
            Etapes :
                - Créer 4 liens indiquant 4 pays différents 
                - Sur chaque lien, créer une valeur GET à transmettre sur la même page
                - En fonction de la valeur transmise, afficher un message (par exemple pour un choix "France", afficher "Vous êtes français")




var_dump($_GET);

if (isset($_GET["pays"]) ) {
    $pays = $_GET["pays"];

    if($pays == "france") $message = "Vous êtes français ?";
    elseif($pays == "italie") $message = "Vous êtes italien ?";
    elseif($pays == "espagne") $message = "Vous êtes espagnol ?";
    elseif($pays == "angleterre") $message = "Vous êtes anglais ?";
    else $message = "Vous venez d'un pays inconnu...";
} else {
    $message = "Veuillez choisir un pays dans la liste ci-dessus";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de Pays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <h2 class="text-center">Choisissez un pays</h2>
            </div>
            <div class="card-body">
                <!-- Navigation des pays par des liens -->
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item"><a href="?pays=france" class="text-decoration-none text-primary">France</a></li>
                    <li class="list-group-item"><a href="?pays=italie" class="text-decoration-none text-success">Italie</a></li>
                    <li class="list-group-item"><a href="?pays=espagne" class="text-decoration-none text-warning">Espagne</a></li>
                    <li class="list-group-item"><a href="?pays=angleterre" class="text-decoration-none text-danger">Angleterre</a></li>
                </ul>

                <!-- Affichage du résultat -->
                <div class="alert alert-info text-center" role="alert">
                    <?= $message ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
*/
var_dump($_GET);

$langage = "";

if (isset($_GET["lang"])) {
    if ($_GET["lang"] == "fr") {
        $langage = "Français";
    } else if($_GET["lang"] == "nl") {
        $langage = "Néerlandais";
    } else if($_GET["lang"] == "en") {
        $langage = "Anglais";
    } else if($_GET["lang"] == "de") {
        $langage = "Allemand";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exo 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Pays</h2>
    <ul class="list-group">
        <li class="list-group-item list-group-item-action">
            <a href="?lang=fr">France</a>
        </li>
        <li class="list-group-item list-group-item-action">
            <a href="?lang=nl">Pays-Bas</a>
        </li>
        <li class="list-group-item list-group-item-action">
            <a href="?lang=en">Royaume-Uni</a>
        </li>
        <li class="list-group-item list-group-item-action">
            <a href="?lang=de">Allemagne</a>
        </li>
    </ul>
    <?php if ($langage != "" ) {
        echo "Vous êtes $langage <hr>";
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>