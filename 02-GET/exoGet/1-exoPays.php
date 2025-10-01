<?php 
/* 

    EXERCICE : 
        La base de la manipulation de GET 
        
            Etapes :
                - Créer 4 liens indiquant 4 pays différents 
                - Sur chaque lien, créer une valeur GET à transmettre sur la même page
                - En fonction de la valeur transmise, afficher un message (par exemple pour un choix "France", afficher "Vous êtes français")

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