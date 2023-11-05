
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM subscribers WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deletedSub'] = '<span class="success">Abonné supprimé avec succés success!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/subscribers.php');
}
else{
    $_SESSION['deletedSub'] = '<span class="fail">Echec de la suppression!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/subscribers.php');
}

?>


