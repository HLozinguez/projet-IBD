<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Projet</title>
    <meta charset="utf-8" />
</head>
<body>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// on vérifie l'existence des variables pour préciser le titre des colonnes
echo "<h1> ";
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    echo "- ID -";
}
if(isset($_POST['titre'])) {
    $titre = $_POST['titre'];
    echo "- Titre -";
}
if(isset($_POST['art'])) {
    $art = $_POST['art'];
    echo "- Artiste -";
}
if(isset($_POST['sortie'])) {
    $sortie = $_POST['sortie'];
    echo "- Année de sortie -";
}
if(isset($_POST['edit'])) {
    $edit = $_POST['edit'];
    echo "- Année d'édition -";
}
if(isset($_POST['nb'])) {
    $nb = $_POST['nb'];
    echo "- Nombre de disques -";
}
if(isset($_POST['com'])) {
    $com = $_POST['com'];
    echo "- Commentaire -";
}
echo "</h1>";

$reponse = $bdd->query("SELECT * FROM vinyles ");

// on met les valeurs demandées
while ($donnees = $reponse->fetch())
{ if(isset($id)){
    ?>
    <p>
    <?php echo $donnees['id']; ?><br />
    <?php
} if(isset($titre)){
    echo $donnees['titre']; ?><br />
    <?php
} if(isset($art)){
    echo $donnees['artiste']; ?><br />
    <?php
}if(isset($sortie)){
    ?>
    <?php echo $donnees['annee_sortie']; ?><br />
    <?php
} if(isset($edit)){
    echo $donnees['annee_edition']; ?><br />
    <?php
} if(isset($nb)){
    echo $donnees['nb_disques']; ?><br />
    <?php
}if(isset($com)){
    echo $donnees['commentaire']; ?><br />
    </p>
    <?php
}
}


$reponse->closeCursor();

?>

</body>
</html>

