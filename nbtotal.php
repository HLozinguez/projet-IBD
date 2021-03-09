<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
		<?php
	
		
			echo "<h3>Nombre total d'album :</h3>";
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
			}
				catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
	
	
			$req = $bdd->query("Select count(titre)  from vinyles  ;");
			
			while ($donnees = $req->fetch()){
				
				echo $donnees["count(titre)"];
					
		
			}

			$req->closeCursor();
			
			
			
			
			echo "<h3>Nombre total de disques :</h3>";
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
			}
				catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
	
	
			$req = $bdd->query("Select sum(nb_disques)  from vinyles  ;");
			
			while ($donnees = $req->fetch()){
				
				echo $donnees["sum(nb_disques)"];
					
		
			}

			$req->closeCursor();
			

	
	
	
			
				?>
		
    </body>
</html>
