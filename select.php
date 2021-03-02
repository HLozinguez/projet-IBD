<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
</head>
<!-- ATTENTION : POUR ME CONNECTER A LA BASE DE DONNEE J'AI DU CHANGER LE PORT DANS $bdd. JE NE SAIS PAS SI VOUS UTILISEZ LE MÊME PORT, SI NON, LE MODIFIER. -->
<!-- Désolé des problèmes que ça créé, mais c'était la seule solution que j'ai trouvé pour faire marcher mon MAMP. -->

<body>

<?php
$artiste = $_POST['artiste'];
echo "<h1> Albums de $artiste : </h1>";
try
{
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=disques;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM vinyles WHERE artiste='{$artiste}'");

while ($donnees = $reponse->fetch())
{
?>
    <p>
        <strong>Id :</strong> <?php echo $donnees['id']; ?><br />
        <strong>Titre :</strong> <?php echo $donnees['titre']; ?><br />
        <strong>Artiste :</strong> <?php echo $donnees['artiste']; ?><br />
        <strong>Année de sorte :</strong> <?php echo $donnees['annee_sortie']; ?><br />
        <strong>Année d'édition :</strong> <?php echo $donnees['annee_edition']; ?><br />
        <strong>Nombre de disque :</strong> <?php echo $donnees['nb_disque']; ?><br />
        <strong>Commentaire :</strong> <?php echo $donnees['commentaire']; ?><br />
    </p>
<?php
}

$reponse->closeCursor();
?>


</body>

</html>