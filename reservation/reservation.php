<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>reservation</title>
		<link href="https://fonts.googleapis.com/css?family=Kameron:400,700" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="reservation.css"/>
	</head>
	<body>
		<?php include("../php/nav.php"); ?>

		<div id="page">

			<section class="chooseATrip" id="first">

				<form id="firstForm" onsubmit="toChoose(event)">
					<div class="selection">
						<div class="dates">
								<label for="startDate">Sélectionnez votre date de départ</label></br>
								<input type="date" name="startDate" min="2018-02-28" max="2019-02-28" required></br>
								<label for="endDate">Sélectionnez votre date de retour</label></br>
								<input type="date" name="endDate" min="2018-03-01" max="2019-02-28" required>
						</div>
						<div class="destination">

							<label for="destination">Sélectionnez votre destination</label></br> <!-- how to make required? -->
							<br>

							<input type="radio" id="grenadines" name="destination" value="dans les Îles Grenadines">
							<label for="grenadines"> Grenadines</label><br>

							<input type="radio" id="vierges" name="destination" value="dans les Îles Vierges">
							<label for="vierges"> Îles Vierges</label><br>

							<input type="radio" id="corse" name="destination" value="en Corse">
							<label for="corse"> Corse</label><br>

							<input type="radio" id="italie" name="destination" value="en Italie">
							<label for="italie"> Italie</label><br>

							<input type="radio" id="sardaigne" name="destination" value="en Sardaigne">
							<label for="sardaigne"> Sardaigne</label><br>

							<input type="radio" id="sicile" name="destination" value="en Sicile">
							<label for="sicile"> Sicile</label><br>

							<input type="radio" id="baleares" name="destination" value="dans les Îles Baleares">
							<label for="baleares"> Îles Baléares</label><br>


							<br>
							<input type="submit" value="Calcul du prix">
						</div>
					</div>
				</form>

			</section>

			<section class="price" id="second">

				<form id="firstForm" onsubmit="toReserve(event)">
					<p>Le prix pour votre sèjour
					     <span id="addDestination" class="underline"></span>
						 entre le <span id="addStartDate" class="underline"></span>
						 et le <span id="addEndDate" class="underline"></span> 
						 est de:<br>
						 <br>
						 <strong class="tripPrice">12.000 €</strong>
					</p>
					<input type="submit" value="Réservez en ligne">
				</form>

			</section>

			<section class="fillUpForm" id="third">

				<form id="thirdForm" onsubmit="toConfirm(event)">
					<div>
						Prénom:<br>
						<input type="text" name="firstname" required><br>
						Nom:<br>
						<input type="text" name="lastname" required><br>
						Email:<br>
						<input type="email" name="email" required><br>
						<br>
						<input type="submit" value="Confirmez la commande">
					</div>
				</form>

			</section>

			<section class="confirmation" id="fourth">
				<form>
					<p><span id="addName" class="underline"></span>, merci de votre réservation. La facture vous a été envoyée sur votre adresse email: <span id="addEmail" class="underline"></span></p>
					<input type="submit" value="Retour">
				</form>
			</section>
<?php include("../php/footer.php"); ?>
		</div>

        <p class="foot"> © NIRVANA 2018 </p>

		<script type="text/javascript" src="reservation.js"></script>
	</body>
</html>
