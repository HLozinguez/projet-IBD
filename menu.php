<!DOCTYPE html>
<html>

<head>
    <title> Projet d'internet et BD</title>
    <meta charset="utf-8" />
</head>

<body>

    <h1> Bienvenue sur votre collection de vinyles!</h1>
    <?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=disques;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT count(DISTINCT titre) as total FROM vinyles');

while ($donnees = $reponse->fetch())
{
?>
    <p>

       <?php echo "Vous avez " ;
       echo $donnees['total'];
       echo " albums dans votre collection"; ?><br />

    </p>
<?php
}

$reponse->closeCursor();
?>

    <a href="ensemble.php"> Ensemble de vos vinyles</a>
    </br>
    <a href="artiste.php"> Liste d'artistes</a>
    </br>
    <a href="colomneform.php"> Cases à cocher (A FAIRE PLUS TARD PARCE QUE C'EST UN ENFER SANS NOM)</a>
    </br>
    <a href="insererform.php"> Ajouter un nouvel album à votre liste!</a>
    </br>
    <a href="selectform.php"> Afficher les albums d'un artiste spécifique</a>
    </br>
    <a href="ensemble.php"> Og or not?</a>
    </br>
    <a href="ensemble.php"> Des stats!</a>
    </br>




</body>

</html>