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
			<form class="pseudo" method="post" action="livre.php">
				<label for="pseudo">Pseudo</label> <br/>
				<input  class="image" type="text" name="pseudo" id="pseudo" placeholder="Exemple : Fisher" maxlength="8"/>
				<i class="glyphicon glyphicon-plus"></i>
				<br/><br/>
				<label  for="fileupload">Image</label><br/>
				<input value="Parcourir"  id="fileupload" type="file" name="files[]" multiple="" height="20">
			
				<label for="Commentaire" >Commentaire</label><br/>
				<textarea name="comment" id="comment" rows="5" cols="85" placeholder= " Saisir un Commentaire ici ..."></textarea><br/>
				<br/><input  value="valider" type="submit" name="Valider">

			</form>
				
					<div class="commentaire" style="color:white;">
						<?php include("../php/livreDor.php"); ?>					
					</div>	
					
		</div>
<?php include("../php/footer.php"); ?>
	</div>
	<script type="text/javascript" src="livre.js">
	
  

	</script>
	</body>

</html>

