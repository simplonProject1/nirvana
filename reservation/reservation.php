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

				<form id="firstForm">
					<div class="selection">
						<div class="destination">

							<label for="destination">Sélectionnez votre destination</label></br>
							<br>

							<input type="radio" id="grenadines" name="destination" value="dans les Îles Grenadines" required>
							<label for="grenadines"> Grenadines</label><br>

							<input type="radio" id="vierges" name="destination" value="dans les Îles Vierges" required>
							<label for="vierges"> Îles Vierges</label><br>

							<input type="radio" id="corse" name="destination" value="en Corse" required>
							<label for="corse"> Corse</label><br>

							<input type="radio" id="italie" name="destination" value="en Italie" required>
							<label for="italie"> Italie</label><br>

							<input type="radio" id="sardaigne" name="destination" value="en Sardaigne" required>
							<label for="sardaigne"> Sardaigne</label><br>

							<input type="radio" id="sicile" name="destination" value="en Sicile" required>
							<label for="sicile"> Sicile</label><br>

							<input type="radio" id="baleares" name="destination" value="dans les Îles Baleares" required>
							<label for="baleares"> Îles Baléares</label><br>


							<br>
							<!-- change value for destination, so it would be en and dans ? -->
						</div>
						<div class="dates">
							<label for="startDate">Sélectionnez votre date de départ</label></br>
							<input type="date" name="startDate" min="2018-02-28" max="2019-02-28" required></br>
							<label for="endDate">Sélectionnez votre date de retour</label></br>
							<input type="date" name="endDate" min="2018-03-01" max="2019-02-28" required>
						</div>

					</div>
				</form>
				<button class="selection" type="button" onclick="toChoose()">Calcul du prix</button>

			</section>

			<section class="price" id="second">

				<div id="firstForm"> 
					<p>Le prix pour votre
						<span id="days" class="underline"></span> jours excursion 
					    <span id="addDestination" class="underline"></span><br><br>
						entre le <span id="addStartDate" class="underline"></span>
						et le <span id="addEndDate" class="underline"></span> 
						est de:<br>
						<br>
						<strong class="tripPrice"><span id="price"></span> €</strong>
					</p>
				</div>
				<button type="button" onclick="toReserve()">Réservez en ligne</button>

			</section>

			<section class="fillUpForm" id="third">

				<form id="thirdForm">
					<div>
						Prénom:<br>
						<input type="text" name="firstname" required><br>
						Nom:<br>
						<input type="text" name="lastname" required><br>
						Email:<br>
						<input type="email" name="email" required><br>
						<br>
					</div>
				</form>
				<button type="button" onclick="toConfirm()">Confirmez vos données</button>

			</section>

			<section class="confirmation" id="fourth">

				<p><span id="addName" class="underline"></span>, merci de votre réservation. La facture sera envoyée sur votre adresse email: <span id="addEmail" class="underline"></span></p>
				<form name="finalForm" action="reservation.php" method="post">
					<div class="toHide">
						<input type="text" name="sDateToSubmit">
						<input type="text" name="eDateToSubmit">
						<input type="text" name="destinationToSubmit">
						<input type="text" name="fnameToSubmit">
						<input type="text" name="lnameToSubmit">
						<input type="text" name="emailToSubmit">
					</div>
					<input type="submit" name="submit" value="Confirmez la commande">
				</form>

			</section>

			<?php include("sendingOrders.php"); ?>

			<?php include("../php/footer.php"); ?>

		</div>

        <p class="foot"> © NIRVANA 2018 </p>

		<script type="text/javascript" src="reservation.js"></script>
	</body>
</html>
