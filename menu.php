<!DOCTYPE html>
<html>

<head>
    <title> Projet d'internet et BD</title>
	<link rel="stylesheet" href="style.css" />
    <meta charset="utf-8" />
</head>

<body>
    <h1> Bienvenue sur votre collection de vinyles !</h1>
	   <?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8', 'root', 'root');
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
	</br>
	
	<h3> Informations sur vos vinyles </h3>
	</br>

	
    <a href="ensemble.php" > Ensemble de vos vinyles </a>
    </br>
	</br>
	</br>
    <a href="artiste.php" > Liste des artistes de votre collection </a>
    </br>
	</br>
	</br>
    <a href="Q31.php" > Apprenez de nouvelles choses sur vos vinyles !</a>
    </br>
	</br>
	</br>
    <a href="selectform.php" > Afficher les albums d'un artiste spécifique</a>
    </br>
	</br>
	</br>
    <a href="albumsorigin.php" > Vinyles originaux ou pas ? </a>
    </br>
	</br>
	</br>
    <a href="nbtotal.php" > Quelques statistiques sur vos vinyles !</a>
    </br>
	</br>
	</br>
	
	<h3> Un nouveau vinyle ? </h3>
	</br>
	
	 <a href="insererform.php" > Ajouter un nouvel album à votre liste !</a>
   
    </br>
	</br>
	</br>
	

</body>

</html>
