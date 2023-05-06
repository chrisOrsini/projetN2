
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="ajust.css">
	<title>Formulaire PHP</title>
</head>
<body>
<?php include "banner.php";?>
           <header>
           	<h1>Mon Titre</h1>
           				</header>
	<main>
		<section>
			<h3>Formulaire Client</h3>
			<form method="post" action="page5.php">
			<form>
				<label>NOM</label><br>
					<input type="text" name="nom" placeholder="Ecris ton Nom"><br><br>
				<label>PRENOM</label><br>
					<input type="text" name="prenom" placeholder="Inscrit ton prenon"><br><br>
				<label>DATE DE NAISSANCE</label><br>
				 	<input type="date" name="date"><br><br>
			 	<label>EMAIL</label><br>
			 		<input type="email" name="email" placeholder="ton mail"><br><br>
		 		<label>TEL</label><br>
		 			<input type="tel" name="tel" placeholder="votre numéro"><br><br>
	 			<label>RECEVOIR DES SPAMS?</label><hr><br>
	 				<input type="checkbox" name="spam" value="spam"><br>

	 				<input type="submit" name="submit" value="Enregistrement" ><br>
	 				<!--dans une balise input de type submit, le paramètre value =""représente le texte du bouton d'envoi--> 

			</form>
		</section>
	</main>
</body>
</html>