
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM staff WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteStaff'] = '<span class="success">Staff supprimé avec succes!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/staff.php');
}
else{
    $_SESSION['deleteStaff'] = '<span class="fail">Echec de la suppression!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/staff.php');
}

?>


