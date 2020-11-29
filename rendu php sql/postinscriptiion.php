		<?php
$nom = $_POST['lastname'];
$prenom = $_POST['firstname'];
$email = $_POST['email'];
$mdp = $_POST['password'];
$mdp_conf = $_POST['password_check'];


if (isset($nom)and isset($prenom)and isset($email)and isset($mdp)and isset($mdp_conf)) {

	
	$bdd =new PDO('mysql:host=localhost; dbname=sondages; charset=utf8', 'root', '');
	
	$requete = $bdd->prepare("INSERT INTO inscription (Nom, Prenom, Email, Mdp, Mdp_conf) VALUES (?, ?, ?, ?, ?)");
	$requete->execute(array($nom, $prenom, $email, $mdp, $mdp_conf));

	echo "bravo";

}	
else{
	echo "enchant_dict_check(dict, word)";
	echo "kkkkkkkkkk";
}
?>