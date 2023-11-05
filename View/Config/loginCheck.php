<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['username'])){
    $_SESSION['notLoggedIn'] = '<span class="fail" style="color: red;">Connectez-vous!</span>';
    header('location:' .SITEURL.'View/frontend/staffLogin.php'); 
    exit(); // Ajout de exit() après la redirection pour éviter l'exécution du code suivant
}
?>
