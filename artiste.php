<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
	<link rel="stylesheet" href="style3.css" />
</head>
<!-- ATTENTION : POUR ME CONNECTER A LA BASE DE DONNEE J'AI DU CHANGER LE PORT DANS $bdd. JE NE SAIS PAS SI VOUS UTILISEZ LE MÊME PORT, SI NON, LE MODIFIER. -->
<!-- Désolé des problèmes que ça créé, mais c'était la seule solution que j'ai trouvé pour faire marcher mon MAMP. -->

<body>
<h3> Les différents artistes présents dans votre collection : </h3> 
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT distinct(artiste) FROM vinyles');

while ($donnees = $reponse->fetch())
{
?>
    <ul id=artiste>

       <li><?php echo $donnees['artiste']; ?></li>

    </ul>
<?php
}

$reponse->closeCursor();
?>


</body>

</html>
