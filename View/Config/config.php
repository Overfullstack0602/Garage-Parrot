<?php 
  session_start();

  define('SITEURL', 'http://localhost/Garage/');

  define('LOCALHOST', 'localhost');
  define('ROOT', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'v.parrotgarage');

  // Connexion à la base de données
  $conn =  mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE);

  // Vérification de la connexion
  if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
  }

  // Sélection de la base de données
  $db_select = mysqli_select_db($conn, DATABASE);
  if (!$db_select) {
    die("Sélection de la base de données échouée : " . mysqli_error($conn));
  }
?>
