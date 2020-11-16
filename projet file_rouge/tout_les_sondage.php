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
<br><br><br>
<center><h1><p class="tls_title">tout les sondages !</p></h1></center>
<br>
<center>
<table border="0">
	<tr>
		<td>
			<table border="0">
				<tr>
					<td>
						<a href="sondage.php"><p class="tls_championnats_niveau">TOP 14 - final</p></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="sondage.php"><center><img src="img/R92ST.jpg" width="50%"></center></a>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<table border="0">
				<tr>
					<td>
						<p class="tls_championnats_niveau">Champions Cup - final</p>
					</td>
				</tr>
				<tr>
					<td>
						<center><img src="img/R92ST.jpg" width="50%"></center>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table border="0">
				<tr>
					<td>
						<p class="tls_championnats_niveau">Coupe du Monde - final</p>
					</td>
				</tr>
				<tr>
					<td>
						<center><img src="img/R92ST.jpg" width="50%"></center>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<table border="0">
				<tr>
					<td>
						<p class="tls_championnats_niveau">VI nations - final</p>
					</td>
				</tr>
				<tr>
					<td>
						<center><img src="img/R92ST.jpg" width="50%"></center>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</center>
<br><br>

<center><input type="button" value="voir +" name="" class="tls_btn_voirplus"></center>
<br><br>

<?php 
include 'footer.php';
?>
</body>
</html>													