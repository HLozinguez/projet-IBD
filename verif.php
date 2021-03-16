<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
		
		
		
		if(isset($_POST['id']) and isset($_POST['pas'])){	
			$id= $_POST['id'];
			$pas = $_POST['pas'];
		
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root','root');
			}
				catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
	
	
			$req = $bdd->prepare("Select COUNT(*) as nbre From utilisateurs Where identifiant = ? and mdp = ? ;");
			$req->execute(array($id,$pas));
			$donnees = $req->fetch();
 
			if ($donnees['nbre'] == 0) {
				echo 'identifiant et/ou mot de passe incorrectes';
			}
			else {
				include 'menu.html';
			} 
		
			

			$req->closeCursor();
		
		
		}
		else{
			echo"veuillez entrer un identifiant et un mot de passe";
		}
		
		?>

    </body>
</html>

