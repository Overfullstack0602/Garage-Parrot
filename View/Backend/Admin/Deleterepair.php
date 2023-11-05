<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM repairing WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteRepair'] = '<span class="success">Supprimée avec succes!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/repair.php');
}
else{
    $_SESSION['deleteCar'] = '<span class="fail">Echec de la suppression</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/repair.php');
}

?>