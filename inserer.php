<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
</head>
<!-- ATTENTION : POUR ME CONNECTER A LA BASE DE DONNEE J'AI DU CHANGER LE PORT DANS $bdd. JE NE SAIS PAS SI VOUS UTILISEZ LE MÊME PORT, SI NON, LE MODIFIER. -->

<body>

    <?php
    $titre = $_POST['titre'];
    $artiste = $_POST['artiste'];
    $annee_sortie = $_POST['annee_sortie'];
    $annee_edition = $_POST['annee_edition'];
    $nb_disque = $_POST['nb_disque'];
    $commentaire = $_POST['commentaire'];
    //Importation des données
    try {
        $bdd = new PDO('mysql:host=localhost;port=3307;dbname=disques;charset=utf8', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO vinyles(titre, artiste, annee_sortie, annee_edition, nb_disque, commentaire) VALUES('{$titre}','{$artiste}', {$annee_sortie}, {$annee_edition}, {$nb_disque}, '{$commentaire}')";
        //Execution de la commande SQL, avec les données importées
        $bdd->exec($sql);
        echo "Données enregistrées";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        //Donne l'erreur SQL, après avoir montré la requete, pour plus de clareté
    }

    $bdd = null;
    ?>

</body>

</html>