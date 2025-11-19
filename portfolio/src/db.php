<?php
$servername = "db";
$databasename = "portfolio_db"; 
$username = "portfolio";      
$password = "portfolio";   

// Maak verbinding
$conn = new mysqli($servername, $username, $password, $databasename);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>
