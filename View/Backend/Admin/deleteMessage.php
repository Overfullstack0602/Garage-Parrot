
<?php 

include('../../Config/config.php');

// get individual ID ====================>
$selectedID = $_GET['id'];

$sql = "DELETE FROM messages WHERE id= $selectedID";
$result = mysqli_query($conn, $sql);
if($result==TRUE){
    $_SESSION['deleteMessage'] = '<span class="success">Message supprimé avec succes!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/messages.php');
}
else{
    $_SESSION['deleteMessage'] = '<span class="fail">Echec de la suppression!</span>';
    header('location:' .SITEURL. 'View/Backend/Admin/messages.php');
}

?>


