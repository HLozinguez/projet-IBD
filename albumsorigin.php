<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
		<?php
	
		
			echo "<h2>Liste des albums originaux :</h2>";
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
			}
				catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
	
	
			$req = $bdd->query("Select titre  from vinyles where annee_sortie = annee_edition ;");
			
			while ($donnees = $req->fetch()){
				?>
				<p>
					 <?php echo $donnees['titre']; ?><br />
					
				<?php
			}

			$req->closeCursor();
			
			
			
			echo "<h2>Liste des albums non-originaux :</h2>";
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
			}
				catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
	
	
			$req = $bdd->query("Select titre  from vinyles where annee_sortie != annee_edition ;");
			
			while ($donnees = $req->fetch()){
				?>
				<p>
					 <?php echo $donnees['titre']; ?><br />
					
				<?php
			}

			$req->closeCursor();
	
	
	
			
				?>
		
    </body>
</html>
