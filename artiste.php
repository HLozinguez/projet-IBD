<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
</head>
<!-- ATTENTION : POUR ME CONNECTER A LA BASE DE DONNEE J'AI DU CHANGER LE PORT DANS $bdd. JE NE SAIS PAS SI VOUS UTILISEZ LE MÊME PORT, SI NON, LE MODIFIER. -->
<!-- Désolé des problèmes que ça créé, mais c'était la seule solution que j'ai trouvé pour faire marcher mon MAMP. -->

<body>
<h1> Artistes apparent dans votre collection.</h1> 
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=disques;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT distinct(artiste) FROM vinyles');

while ($donnees = $reponse->fetch())
{
?>
    <p>

       <?php echo $donnees['artiste']; ?><br />

    </p>
<?php
}

$reponse->closeCursor();
?>


</body>

</html>