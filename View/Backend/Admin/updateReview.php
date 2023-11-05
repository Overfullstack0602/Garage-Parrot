<?php 
include('./adminPartials/adminHeader.php');
$date = date("Y-m-d");
ob_start();
$selectedID = $_GET['id']
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="updatesBody">
            <div class="top flex">
                <h1 class="titleText">
                Vos avis nous interessent
                </h1>
               <p>Informez vos proches!</p>
            </div>

                    <?php 
                        $sql = "SELECT * FROM reviews where id = $selectedID";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $status	 = $row['status'];

                                }
                            }
                        }
                    ?>

            <div class="newUpdateDiv">
                
                <h3>Mettre a jour l'avis</h3>
                <form method="POST" >

                    <div class="singleField">
                        <label for="reviewStatus">Avis status</label>
                       <select name="reviewStatus" id="reviewStatus">
                        <option value="Published">Publié</option>
                        <option value="Pending">En attente</option>
                      </select>
                    </div>

                    <button class="btn flex bg" name="submit">
                        <i class='bx bxs-pin icon'></i>
                        Mettre a jour
                    </button>
                    
                </form>
            </div>
        </div>    

    </div>   

<?php 
include('./adminPartials/adminFooter.php');
?>


<?php 
if(isset($_POST['submit'])){

  $reviewStatus = $_POST['reviewStatus'];

  
  $sql = "UPDATE reviews SET
  status = '$reviewStatus'
  where id = $selectedID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['reviewUpdated'] = '<span class="success">Avis mis a jour avec Success!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/reviews.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>