<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>

<body>
    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
        janvier
        février
        mars
        avril
        mai
        juin
        juillet
        aout
        septembre
        octobre
        novembre
        décembre
    </p>

    <?php

    $months = array(

        "janvier",
        "février",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "décembre",
    );

    $months[7] = "Août";
    var_dump($months[7]);
    ?>

</body>

</html>