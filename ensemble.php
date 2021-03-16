<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
	<link rel="stylesheet" href="style2.css" />
</head>
<!-- ATTENTION : POUR ME CONNECTER A LA BASE DE DONNEE J'AI DU CHANGER LE PORT DANS $bdd. JE NE SAIS PAS SI VOUS UTILISEZ LE MÊME PORT, SI NON, LE MODIFIER. -->
<!-- Désolé des problèmes que ça créé, mais c'était la seule solution que j'ai trouvé pour faire marcher mon MAMP. -->

<body>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM vinyles');

while ($donnees = $reponse->fetch())
{
?>
    
        <strong id=vinyle>Vinyle n° <?php echo $donnees['id']; ?><br /> </strong>
		</br>
        <strong class =autres>Titre :</strong> <?php echo $donnees['titre']; ?><br />
        <strong class =autres>Artiste :</strong> <?php echo $donnees['artiste']; ?><br />
        <strong class =autres>Année de sorte :</strong> <?php echo $donnees['annee_sortie']; ?><br />
        <strong class =autres>Année d'édition :</strong> <?php echo $donnees['annee_edition']; ?><br />
        <strong class =autres>Nombre de disque :</strong> <?php echo $donnees['nb_disques']; ?><br />
        <strong class =autres>Commentaire :</strong> <?php echo $donnees['commentaire']; ?><br />
    </br>
	</br>
	
	
	
<?php
}

$reponse->closeCursor();
?>


</body>

</html>
