<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Livre d'or</title>
		<link rel="stylesheet" type="text/css" href="livre.css"/>
	</head>
	
		
	

	<body>
		<header>
		<?php include("../php/nav.php"); ?>
		</header>
		<div id="page">

		

		<div class="formulaire">
			<form class="pseudo" action="fichier de récupération en.php">
				<label for="pseudo">Pseudo</label> <br/>
				<input  class="image" type="text" name="pseudo" id="pseudo" placeholder="Exemple : Fisher" maxlength="8"/>
				<i class="glyphicon glyphicon-plus"></i>
				<br/><br/>
				<label  for="fileupload">Image</label><br/>
				<input value="Parcourir"  id="fileupload" type="file" name="files[]" multiple="" height="20">
			</form>

			<form class="comm" method="post" action="		fichier de récupération en.php"><br/>
				<label for="Commentaire" >Commentaire</label><br/>
				<textarea name="comment" id="comment" rows="5" cols="85" placeholder= " Saisir un Commentaire ici ..."></textarea><br/>
				<br/><input  value="valider" type="submit" name="Valider">

				</form>
			
					
			</div>
<?php include("../php/footer.php"); ?>
	</div>
	<script type="text/javascript" src="livre.js">
	
  

	</script>
	</body>

</html>