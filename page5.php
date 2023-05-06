<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="ajust.css">
	<title>Profil Client</title>
</head>
<body>
	<?php include "banner.php";?>

        <header>
        	<h1>Profil Client</h1>
        </header>
        <main>
        		<section>
        			<?php
        					extract($_POST);
        					echo "<h3>Client : $prenom $nom</h3>";
        					 $age = date("Y-m-d") - $date;
        					echo "<p>Date de naissance : $date</p>";
        					echo "<p>Age : $age</p>";
                            	echo "<p>Email : $email</p>";
                            	echo "<p>Tel : $tel</p>";

        					echo "<p>";
        					/*if(isset($spam)){} joue aussi le même rô^le que la commande si dessous*/
        							if($spam === "spam"){
        								echo "Vous avez choisi de recevoir des spams";
        							}
    									else{
    										echo "Vous avez choisi de ne pas recevoir des spams";
    									}
							echo "</p>";
					?>
        		</section>
        				<section>
        					<?php
        						extract($_POST);
        						$age = date("Y-m-d") - $date;
        					?>
        					<h3>Client : <?php echo "$prenom $nom";?></h3>
        					<p>Date de naissance : <?php echo "$date";?></p>
        					<p>Age : <?php echo "$age";?></p>
        					<p>Email : <?php echo "$email";?></p>
        					<p>Tel : <?php echo "$tel";?></p>

        						<p><?php echo (isset($spam))? "Vous avez choisi de recevoir des spams" : "Vous avez choisi de ne pas recevoir des spams";?></p>
        				</section>
        </main>
</body>
</html>