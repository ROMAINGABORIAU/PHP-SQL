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
<center>
	<div style="width: 50%;  padding-top:10px; padding-bottom:10px;border: 3px solid #A0A0A0; text-align: center;background: yellow;font-size: 300%; color: red;"> 100 points a gagner !</div><br><br>

	<div style="width: 30%; border: 5px solid green; text-align: center; font-size: 200%;text-align: center;">Final<br>TOP14</div><br>
	<p>RACING 92 / STADE TOULOUSAIN</p>
	<img src="img/R92ST.jpg"><br>
	<p class="sondage_text_fp">1 MATCH AU SOMMET !<br>2 EQUIPES DE LEGENDES !<br>SELON VOUS, QUI L'EMPORTERAS ?</p>
	<table border="0" width="60%">
		<tr style="font-size: 150%;">
			<td style="text-align: center;">RACING 92</td>
			<td style="text-align: center;">NUL</td>
			<td style="text-align: center;">STADE <br>TOULOUSAIN</td>
		</tr>
		<tr>
			<td><div style="width: 100%;  padding-top:10px; padding-bottom:10px; text-align: center;background: #C0C0C0;">&nbsp;</div></td>
			<td><div style="width: 100%;  padding-top:10px; padding-bottom:10px; text-align: center;background: #C0C0C0;">&nbsp;</div></td>
			<td><div style="width: 100%;  padding-top:10px; padding-bottom:10px; 	text-align: center;background: #C0C0C0;">&nbsp;</div></td>
		</tr>
	</table>
	<br> 
	<input type="button" class="sondage_btn_validation" value="C'est mon dernier mot" name="">
</center>
<br>
<script src="R92VSST.js"></script>


<?php 
include 'footer.php';
?>
</body>
</html>												