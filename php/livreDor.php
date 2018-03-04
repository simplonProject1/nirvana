<?php 
	try //Test de connexion a la bdd
		{
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=nirvana;charset=utf8', 'root', 'azerty');
		}
	catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

	if(isset($_POST['pseudo']) AND isset($_POST['comment'])) //Test si le formulaire est rempli
		{
			$bdd->exec("INSERT INTO nirvana (pseudo, commentaire) VALUES ('".$_POST['pseudo']."', '".$_POST['comment']."')"); // Insertion dans bdd
		}

	$reponse = $bdd->query('SELECT * FROM nirvana'); // Boucle affichage des messages
	while ($donnees = $reponse->fetch())
		{
?>
								
		<hr>
		<?php echo $donnees['pseudo']; ?>
		<br />
		<br />
		<?php echo $donnees['commentaire']; ?>
		<br />
		<hr>
<?php
		}
		$reponse->closeCursor();
?>