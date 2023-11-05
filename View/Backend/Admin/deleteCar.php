
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM cars WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteCar'] = '<span class="success">Voiture supprimée avec succes!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/cars.php');
}
else{
    $_SESSION['deleteCar'] = '<span class="fail">Echec de la suppression</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/cars.php');
}

?>


