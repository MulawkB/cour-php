<?php

/*

    EXERCICE COOKIE :
            Mémorisation d'un choix de langue par l'utilisateur : 

                Etapes : 
                    - 1 Créer 4 liens HTML représentant des langues 
                    - 2 Via le GET, transmettre les informations de la langue cliquée
                    - 3 En fonction de la langue cliquée, créer un cookie correspondant
                    - 4 Vérifier le fonctionnement en revenant sur la page pour voir si la langue a été mémorisée (afficher la langue sélectionnée ou une phrase dans la langue en question)
                    - 5 Bien faire en sorte que le choix de langue soit cohérent (quelle serait la priorité entre le cookie, le choix utilisateur, le choix par défaut)
                    - 6 Faire en sorte que la langue par défaut soit celle du navigateur 

*/
var_dump($_COOKIE);

if (!isset($_COOKIE["lang"])) {
    setcookie("lang", "en", time() + (7 * 24 * 3600));
}

if(isset($_GET["lang"])) {
    $selectedLanguage = $_GET["lang"];
    setcookie("lang",$selectedLanguage,time() + (7 * 24 * 3600));
    header("location:exoLangue.php");
    exit;
}
$lang = $_COOKIE["lang"] ?? "en";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <p>
            <a class="btn btn-outline-primary" href="?lang=fr">Francais</a>
            <a class="btn btn-outline-primary" href="?lang=nl">Néerlandais</a>
            <a class="btn btn-outline-primary" href="?lang=de">Allemand</a>
            <a class="btn btn-outline-primary" href="?lang=en">Englais</a>
        </p>
        <p>Langue actuelle : <strong><?= ucfirst($lang) ?></strong></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>