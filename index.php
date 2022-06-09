<?php

/* Imports */
require_once __DIR__ . "/class/BonCadeau.class.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon Cadeau</title>
</head>

<body>
    <!-- Rentrer les informations -->

    <h1>GENERATEUR DE BON CADEAU</h1>
    <form action="Resultat.bon.php" method="POST">
        <div>
            <label for="">Montant du bon:</label>
            <input name="prix" type="number" min="10" max="10000" required>
        </div>

        <div>
            <label for="">Nom et Prénom du bénéficiaire:</label>
            <input name="nom_prenom_receveur" type="text" required>
        </div>

        <div>
            <label for="">Le nom et le prénom de la personne offrant le bon:</label>
            <input name="nom_prenom_offreur" type="text" required>
        </div>



        <button>Envoyer</button>

    </form>



</body>

</html>