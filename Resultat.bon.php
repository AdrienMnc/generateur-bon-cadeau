<?php

require_once __DIR__ . "/class/BonCadeau.class.php";


/* Traitement de la requête si le verbe HTTP est POST */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* Récupération des valeurs du body de la requête */
    $prix = $_POST["prix"];
    $nom_prenom_receveur = $_POST["nom_prenom_receveur"];
    $nom_prenom_offreur = $_POST["nom_prenom_offreur"];


    /* Création de l'instance de Product */
    $newBonCadeau = new BonCadeau($prix, $nom_prenom_receveur, $nom_prenom_offreur, "", "");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

<body>

</body>

</html>
<!-- Afficher les resultats -->
<?php if (isset($newBonCadeau)) { ?>
    <h2>Nouveau produit créé</h2>
    <p> Détails: </p>
<?php
    $newBonCadeau->afficher();
} ?>

<p><a href="index.php">Retourner à l'acceuil</a></p>