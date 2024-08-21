<?php
$host = 'localhost'; // ou l'adresse IP de votre serveur
$db_name = 'colispros'; // Remplacez par le nom de votre base de données
$username = 'root'; // Nom d'utilisateur par défaut pour XAMPP
$password = ''; // Mot de passe par défaut pour XAMPP

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Configurez PDO pour lever des exceptions en cas d'erreur
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
