<?php

$email = $_POST['connexion_email'];
$pass = $_POST['connexion_email'];

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "sondage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM INScription WHERE Email = '$email";
$result = $conn->prepar($sql);
$result->execute();

$data = $result->fetchAll();
if (password_verify($pass, $data[0]["password"])) {
    echo "connexion réussie";
    $_SESSION['email'] = $email;
}