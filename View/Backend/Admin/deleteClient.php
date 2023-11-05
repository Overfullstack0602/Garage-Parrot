
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM clients WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteClient'] = '<span class="success">Client supprimé avec succes!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/clients.php');
}
else{
    $_SESSION['deleteClient'] = '<span class="fail">Echec de la supprission!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/clients.php');
}

?>


