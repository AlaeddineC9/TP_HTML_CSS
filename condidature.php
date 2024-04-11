<!DOCTYPE html>
<html lang="fr">
	<link rel="stylesheet" href="styles.css">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formation</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>  
    <section class="wrapper">
  <div class="verde"></div>
  <div class="blanco"></div>
  <div class="rojo"></div>
</section>
		
			
    <button onclick="window.location.href='index.php'" > 🏠Acceuil </button>
    <button onclick="window.location.href='formations.php'" > Nos Formations </button>
    <button onclick="window.location.href='condidature.php'" > Candidature </button>
	
            </header>
			<hr>
			<main>
            <form method="POST">
			<div class="flex_col">
            <label>Genre</label> 
            <select name="Genre" id="Genre">
					<option value="" disabled selected>selectionner le genre</option>
					<option value="Homme">H</option>
					<option value="Femme">F</option>
			
			</select>
				<label for="nom">Votre nom <sup>*</sup> </label>
				<input type="text" placeholder="entrer votre nom" id="nom" name="nom" required>
				<label for="prenom">Votre prénom <sup>*</sup> </label>
				<input type="text" placeholder="entrer votre prenom" id="prenom" name="prenom" required>
				<label >date de naissance<sup>*</sup> </label>
				<input type="date" required>
				
                <label>Lieu de naissance</label> 
				<select name="lieu" id="lieu">
				<option value="" disabled selected >selectionner votre lieu de naissance</option>
					<option value="France">France</option>
					<option value="Italy">Italy</option>
					<option value="ESP">Espagne</option>
					<option value="SUI">Suisse</option>
					<option value="GER">Almagne</option>
					<option value="BLG">Belgique</option>
					<option value="Grece">Grece</option>	
				</select>
                <label for="tel">Numéro de téléphone <sup>*</sup> </label>
				<input type="text" placeholder="entrer votre numéro de téléphone" id="tel" name="tel" required>
				<label for="email">Votre adresse e-mail <sup>*</sup>: </label>
				<input type="email" placeholder="entrer votre email" id="email" name="email" required>
				<label >mot de passe<sup>*</sup></label>
				<input type="password" placeholder="entrez votre mot de passe" name="mdp" required>
				
				<label >Description</label>
				<textarea name="description" cols="30" rows="10" placeholder="entrer votre description"></textarea>
                <label >CV</label>
                <input type="file">
				
				<button class="valider">Valider</button>
				<div class="logo">
				<img src="images/html.jpg" alt="html">
				<img src="images/css.png" alt="css">
				<img src="images/js.jpg" alt="js">
				<img src="images/php.jpg" alt="php">
				<img src="images/mysql.jpg" alt="mysql">
				</div>
				
			</div>
			
			
		</form>
			</main>
</body>
</html>