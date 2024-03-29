<?php 
include('./adminPartials/adminHeader.php');
ob_start();
$selectedCarID = $_GET['id'];
?>

    <div class="adminDasboard flex">

        <?php 
        include('./adminPartials/sideMenu.php');
       
        ?>

        <div class="propertyDetailsBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                    Details du véhicule
                </h1>
                
                <div class="headerBtns flex">
   
                    <a href="<?php echo SITEURL?>View/Backend/Admin/deleteCar.php?id=<?php echo $selectedCarID?>">
                        <button  class="flex btn delBtn">
                            <i class="uil uil-trash-alt icon"></i> Supprimer
                        </button>
                    </a>
                    <a href="<?php echo SITEURL?>View/Backend/Admin/updateCar.php?id=<?php echo $selectedCarID?>">
                        <button  class="flex btn bg">
                            <i class="uil uil-layer-group icon"></i> Mettre a jour
                        </button>
                    </a>
                </div>

            </div>

            <?php     
$clientID = mysqli_real_escape_string($conn, $_SESSION['username']);
$sql = "SELECT id, firstname FROM clients WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $clientID);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    if ($res) {
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $clientId = $row['id'];
                $clientFirstname = $row['firstname'];
            }
        }
    }

    mysqli_stmt_close($stmt);
}
?>


                <?php     
                    $selectedCarID = mysqli_real_escape_string($conn, $selectedCarID); // Assurez-vous que $selectedCarID est défini
                    $sql = "SELECT * FROM cars WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "i", $selectedCarID); // "i" indique que c'est un entier
                        mysqli_stmt_execute($stmt);
                        $res = mysqli_stmt_get_result($stmt);}
                    
                        if ($res) {
                            $count = mysqli_num_rows($res);
                    
                            if ($count > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                            $id = $row['id'];
                            $carname = $row['carname'];
                            $price = $row['price'];
                            $location = $row['location'];
                            $priceinclusives = $row['priceinclusives'];
                            $body = $row['body'];
                            $fuel = $row['fuel'];
                            $engine = $row['engine'];
                            $bodystyle = $row['bodystyle'];
                            $performance = $row['performance'];
                            $safety = $row['safety'];
                            $technology = $row['technology'];
                            $releasedate = $row['releasedate'];
                            $seats = $row['seats'];
                            $modelyear = $row['modelyear'];
                            $finaldrive = $row['finaldrive'];
                            $modelgrade = $row['modelgrade'];
                            $specregion = $row['specregion'];
                            $insurance = $row['insurance'];
                            $note = $row['note'];
                            $mainimage = $row['mainimage'];
                            $status = $row['status'];
                            $staffID = $row['staffID'];
                            $Interior1 = $row['Interior1'];
                            $Interior2 = $row['Interior2'];
                            $Interior3 = $row['Interior3'];
                            $Interior4 = $row['Interior4'];
                            $Exterior1 = $row['Exterior1'];
                            $Exterior2 = $row['Exterior2'];
                            $Exterior3 = $row['Exterior3'];
                            $Exterior4 = $row['Exterior4'];

                            }
                        }
                    }
                ?>

            <div class="detailsContainer">
                <div class="rightDiv">
                    <div class="divTopSection flex">
                    <div class="imgsDiv flex">
                        <div class="smallImgs grid">
                            <?php 
                                if($Interior1!=""){   
                                    ?>
                                    <div class="smallImg">
                                     <img src="<?php echo SITEURL;?>Assets/<?php echo $Interior1;?>" alt="Car Image">
                                    </div>
                                   
                                
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                }
                            ?>
                            <?php 
                                if($Interior2!=""){   
                                    ?>
                                    <div class="smallImg">
                                     <img src="<?php echo SITEURL;?>Assets/<?php echo $Interior2;?>" alt="Car Image">
                                    </div>
                                   
                                
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                }
                            ?>
                            <?php 
                                if($Interior3!=""){   
                                    ?>
                                    <div class="smallImg">
                                     <img src="<?php echo SITEURL;?>Assets/<?php echo $Interior3;?>" alt="Car Image">
                                    </div>
                                   
                                
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                }
                            ?>
                        </div>

                        <div class="mainImgSwiper">

                        
                        <?php 
                            if($mainimage!=""){   
                                ?>
                                <div class="bigImg">
                                <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
    
                                    <span class="flex"><i class='bx bxs-star icon'></i>Perfect Fit</span>
                                </div>
                            
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                            }
                        ?>
                        </div>
                    </div>

                    <div class="staffDetails">

                    
                        <h3 class="cardTitle">Staff info</h3>
                        <?php 
                        
                        $sql = "SELECT * FROM staff where id ='$staffID'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $secondname = $row['secondname'];
                                $username	 = $row['username'];
                                $nationality = $row['nationality'];
                                $phone = $row['phone'];
                                $gender = $row['gender'];
                                $language = $row['language'];
                                $dob = $row['dob'];
                                $description = $row['description'];
                                $email = $row['email'];
                                $experience  = $row['experience'];
                                $profilepic = $row['profilepic'];
                                $coverpic = $row['coverpic'];
                                $facebook = $row['facebook'];
                                $twitter = $row['twitter'];
                                $instagram = $row['instagram'];
                                $linkedin = $row['linkedin'];
                                $role = $row['role'];
                                $response = $row['response'];
                                $status = $row['status'];

                                }
                            }
                        }
                    ?>


                        <?php 
                            if($profilepic!=""){   
                                ?>
                                <div class="imgDiv">
                                <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                </div>
                            
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                            }
                        ?>
                        <h3 class="name"><?php echo $firstname;?> <?php echo $secondname;?></h3>
                        <span class="nationality flex">
                            <i class="uil uil-globe icon"></i><?php echo $nationality;?>
                        </span>
                      
                        <span class="phone flex">
                            <i class="uil uil-phone icon"></i></i><?php echo $phone;?>
                        </span>

                        <span class="history">
                            <!-- <small></small> -->
                        </span>

                        <a href="https://mailto:<?php echo $email;?>" target="_blank">
                            <span class="email flex bg">
                                <i class="uil uil-envelope-alt icon"></i><?php echo $email;?>
                            </span>
                        </a>
                    </div>
                    </div>

                    <div class="divBottomSection flex">
                           <div class="divBottomleftSection">
                            
                            <div class="divTop flex">
                                <h1 class="price">€<?php echo $price;?></h1>
                                <div class="aprtName">
                                    <h2><?php echo $carname;?></h2>
                                    <span class="flex"> <i class='bx bxs-location-plus icon'></i><?php echo $location;?> </span>
                                </div>
    
                                <div class="icons flex">
                                    <i class="uil uil-share icon"></i>
                                    <i class="uil uil-heart-alt icon"></i>
                                    <i class='bx bx-dots-horizontal-rounded icon' ></i>
                                </div>
    
                            </div>

                            <div class="divBottom">
                                <div class="bottomRight flex">
                                    <div class="smallMenu grid">
                                        <i class="uil uil-info-circle icon active"></i>
                                        <i class="uil uil-wallet icon"></i>
                                        <i class="uil uil-bill icon"></i>
                                    </div>
        
                                    <div class="mainContent">
                                       <div class="summary flex">
                                        <span>
                                            <p>Année</p>
                                            <h4 class="flex"> <i class="uil uil-calendar-alt icon"></i><?php echo $modelyear;?></h4>
                                        </span>

                                        <span>
                                            <p>Siéges</p>
                                            <h4 class="flex"><i class="uil uil-bed-double icon"></i><?php echo $seats;?></h4>
                                        </span>
        
                                        <span>
                                            <p>Autopilote</p>
                                            <h4 class="flex"> <i class="uis uis-anchor icon"></i>Oui</h4>
                                        </span>
                                         

                                        <span>
                                            <p>Réservoir</p>
                                            <h4 class="flex"><i class='bx bxs-gas-pump icon' ></i><?php echo $fuel;?></h4>
                                        </span>

                                       </div>

                                       <div class="content grid">
                                        
                                        <div class="overview">
                                            <h3>Apercu</h3>
                                            <div class="overviewContent grid">
                                                <span class="span"> Carrosserie: <span class="ans"><?php echo $body;?></span></span>
                                                <span class="span"> Année: <span class="ans"><?php echo $modelyear;?></span></span>
                                                <span class="span"> Transmission finale: <span class="ans"><?php echo $finaldrive;?></span></span>
                                                <span class="span"> Niveau de modèle: <span class="ans"><?php echo $modelgrade;?></span></span>
                                                <span class="span"> Région de spécification: <span class="ans"><?php echo $specregion;?></span></span>
                                                <span class="span"> Réservoir: <span class="ans"><?php echo $fuel;?></span></span>
                                                <span class="span"> Moteur: <span class="ans"><?php echo $engine;?></span></span>
                                            </div>
                                        </div>

                                        <div class="features">
                                            <h3>Features</h3>
                                            <div class="featuresContent grid">
                                                <div class="singleCard">
                                                    <span class="title">
                                                    Style de carrosserie
                                                    </span>
                                              
                                                    <?php echo $bodystyle;?>
                                                </div>
                            
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Performace
                                                    </span>
            
                                                    <?php echo $performance;?>
                                                </div>
                            
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Sécurité
                                                    </span>

                                                    <?php echo $safety;?>
                                                </div>
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Technologies
                                                    </span>

                                                    <?php echo $technology;?>
                                                </div>
                                             </div>
                                        </div>

                                        <div class="note">
                                            <h3>Note</h3>
                                        <p>
                                        <?php echo $note;?>  
                                        </p>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                               
                            </div>
                           </div>

                           <div class="reviews divBottomRightSection">
                            <h3 class="reviewTitle">Apercu</h3>
                            <div class="reviewsContainer grid">

                                <?php     
                                    $selectedCarID = $_GET['id'];
                                    $sql = "SELECT * FROM reviews where carID= $selectedCarID";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE){
                                        $count =  mysqli_num_rows($res);

                                        if($count > 0){
                                            while($row = mysqli_fetch_assoc($res)){
                                            $id = $row['id'];
                                            $reviewerName = $row['reviewerName'];
                                            $review = $row['review'];
      
                                            ?>
                                            <div class="singleReview">
                                                <span class="reviewerName">
                                                <?php echo $reviewerName;?>   
                                                </span>
                                                <p class="text">
                                                <?php echo $review;?>  
                                                </p>
                                                </div>
                                            <?php

                                            }
                                            
                                        }

                                        else{
                                            ?>
                                            <span>Pas d'avis pour le moment!</span>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>


    <!-- link js file-->
    <script src="../index.js"></script>
    <!-- link swiper js -->
    <script src="../swiper-bundle.min.js"></script>
    
<?php 
include('./adminPartials/adminFooter.php');
?>

<?php 
if(isset($_POST['submit'])){

  $message = $_POST['message'];
  
  $sql = "INSERT INTO messages SET
  senderID = '$clientId',
  receiverID = '$id',
  message = '$message'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['messageSent'] = '<span class="success">Message sent!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/cars.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>