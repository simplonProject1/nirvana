<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="contact.css"/>
		
	</head>
<body>
	<?php include("../php/nav.php"); ?>
</br>
  <div id="page"> 
	
        <div class="contactez-nous">
            <h2 class="h2"> CONTACTEZ-NOUS </h2>
            <p> Nous pouvons vous proposer des offres personnalisées. Ainsi, de nombreuses possibilités (destinations, formules de repas ou autres), non visibles sur notre site Internet, peuvent être mises en place. Nous nous ferons un plaisir de répondre à la moindre de vos exigences. </p>
            <form>
            	<label for="name">Nom</label>
            	<input type="text" placeholder="Votre Nom" id="name"> <!--carré où on écrit le nom-->
            	<label for="email">Email</label>
            	<input type="text" placeholder="Votre email" id="email" > <!--carré où on écrit le nom-->
            	<input type="submit" value="OK" class="button1" onclick="this.value='Merci'"><!--carré de validation-->
            	<textarea rows="10" cols="40" types="text" placeholder="Demandes particulières"> </textarea>

            </form>
   		 </div>
   	</div>

    <br>
 	<div id="owlCarousel">
                    <ul id="owl">
                        <li class="suite showing"><img src="france.jpg" alt="france" height="100px" width="150px"/></li>
                        <li class="suite"><img src="italie.jpg" alt="italie" height="100px" width="150px"/></li>
                        <li class="suite"><img src="uk.jpg" alt="uk" height="100px" width="150px"/></li>
                    </ul>
    </div>

  </div>
  <script src="contact.js"></script>
  <?php include("../php/footer.php"); ?>
</body>
</html>