<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Q3</title>
</head>
<body>
<form action='Q32.php' method='post'>
    <p>
    <label for='id'> ID </label>
    <input type='checkbox' id='id' name='id' >

    <label for='titre'>Titre</label>
    <input type='checkbox' id='titre' name='titre' >

    <label for='art'>Artiste</label>
    <input type='checkbox' id='art' name='art' >

    <label for='sortie'>Année de sortie</label>
    <input type='checkbox' id='sortie' name='sortie' >

    <label for='edit'>Année d'édition</label>
    <input type='checkbox' id='edit' name='edit' >

    <label for='nb'>Nombre de disques </label>
    <input type='checkbox' id='nb' name='nb' >

    <label for='com'>Commentaire </label>
    <input type='checkbox' id='com' name='com' >

    </p>
    <p>

    <label for='artalpha'>Artiste par ordre alphabétique </label>
    <input type='radio' id='artalpha' name='tri' value='artalpha' >

    <label for='ordersortie'> Albums rangés par année de sortie </label>
    <input type='radio' id='ordersortie' name='tri' value='ordersortie' >

    <label for='orderedit'>Albums rangés par année d'édition </label>
    <input type='radio' id='orderedit' name='tri' value='orderedit' >

    <label for='ordersortieart'> Albums rangés par année de sortie pour le même artiste</label>
    <input type='radio' id='ordersortieart' name='tri' value='ordersortieart' >

    </p>

    <input type="submit" value=" Ok ">

</form>
</body>
</html>
