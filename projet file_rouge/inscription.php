<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>index</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
 
 <!-- Le reste du contenu -->
<?php 
include 'navbar.php';
?>
<br><br><br><br><br>

<form action="inscription_post.php" method="post">
	<table class="inscription_tableau" border="0">
		<thead>
			<tr style="width: 50%; text-align: center; color: green; background-color: yellow;" >
				<th colspan="2" class="inscription_th"><h1>Tu veux jouer ? inscrit toi !</h1></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="inscription_td">NOM:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td class="inscription_td">PRENOM:</td>
				<td><input type="text" name="firtname"></td>
			</tr>
			<tr>
				<td class="inscription_td">PSEUDO:</td>
				<td><input type="text" name="pseudo"></td>
			</tr>
			<tr>
				<td class="inscription_td">DATE DE NAISSANCE:</td>
				<td><input type="date" name="birthdate"></td>
			</tr>
			<tr>
				<td class="inscription_td">SEXE:</td>
				<td><input type="radio" id="sexe_femme" name="sexef" value="femme" ><label for="sexe_femme">Femme</label>
				<input type="radio" id="sexe_homme" name="sexeh" value="homme" ><label for="sexe_homme">Homme</label>
				<input type="radio" id="sexe_nsp" name="sexensp" value="nsp" ><label for="sexe_nsp">j'ai beau cherché, je vois pas</label></td>
			</tr>
			<tr>
				<td class="inscription_td">E-MAIL:</td>
				<td><input type="email" name="email"></td>
			</tr><tr>
				<td class="inscription_td">MOT DE PASSE:</td>
				<td><input type="text" name="password"></td>
			</tr><tr>
				<td class="inscription_td">MOT DE PASSE (confiirmation):</td>
				<td><input type="password" name="passwordconf"></td>
			</tr>
			<tr>
				<td class="inscription_td">AVATAR:</td>
				<td><input type="file" name="avatar"></td>
			</tr>
	</table>
			<br><input style="margin-left: 50%;
			display: block;width: 100%;font-size: 200%; width: 30%; background-color: yellow; padding-top: 1%; padding-bottom: 1%;" type="button" name="validation" value="valider"><br>
</form>
<?php 
include 'footer.php';
?>
</body>
</html>													