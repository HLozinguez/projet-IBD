<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
</head>
<!-- ATTENTION : POUR ME CONNECTER A LA BASE DE DONNEE J'AI DU CHANGER LE PORT DANS $bdd. JE NE SAIS PAS SI VOUS UTILISEZ LE MÊME PORT, SI NON, LE MODIFIER. -->
<!-- Désolé des problèmes que ça créé, mais c'était la seule solution que j'ai trouvé pour faire marcher mon MAMP. -->

<body>

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

echo '<form method="POST" action="select.php">';
echo "<select name='artiste'>";

while ($donnees = $reponse->fetch())
{
    echo "<option value='" . $donnees['artiste'] . "'>" . $donnees['artiste'] . "</option>";
}
echo '<input type="submit" value="Valider" />';
echo '</form>';

$reponse->closeCursor();
?>


</body>

</html>