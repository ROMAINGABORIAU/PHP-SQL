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
<form action="postinscriptiion.php" method="post">

	<table border="0" class="inscription_tableau">
			<tr class="inscription_tr">
				<td><label>nom : </label></td>
				<td><input type="texte" name="lastname" ></td>
			</tr>
			<tr class="inscription_tr">
				<td><label>prenom : </label></td>
				<td><input type="texte" name="firstname" ></td>
			</tr>
			<tr class="inscription_tr">
				<td><label>email : </label></td>
				<td><input type="email" name="email" ></td>
			</tr>
			<tr class="inscription_tr">
				<td><label>mot de passe : </label></td>
				<td><input type="password" name="password" ></td>
			</tr>
			<tr class="inscription_tr">
				<td><label>email : </label></td>
				<td><input type="password" name="password_check" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="ok"></td>
			</tr>
	</table>

</form>
<?php 
include 'footer.php';
?>
</body>
</html>													