<?php
include('./clientPartials/header.php');
ob_start();
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->

    <!-- Car Details Starts -->
    <div class="carDetails section">

        <?php 
            $selectedCasrID = $_GET['id'];
            $sql = "SELECT * FROM cars where id = '$selectedCasrID'";
            $res = mysqli_query($conn, $sql);
            if($res == TRUE){
                $count =  mysqli_num_rows($res);

                if($count > 0){
                    while($row = mysqli_fetch_assoc($res)){
                    $id = htmlspecialchars($row['id']);;
                    $carname = htmlspecialchars($row['carname']);
                    $price = htmlspecialchars($row['price']);
                    $location = htmlspecialchars($row['location']);
                    $priceinclusives =htmlspecialchars($row['priceinclusives']);
                    $body = htmlspecialchars($row['body']);
                    $fuel = htmlspecialchars($row['fuel']);
                    $engine = htmlspecialchars($row['engine']);
                    $bodystyle = htmlspecialchars($row['bodystyle']);
                    $performance = htmlspecialchars($row['performance']);
                    $safety = htmlspecialchars($row['safety']);
                    $technology = htmlspecialchars($row['technology']);
                    $releasedate = htmlspecialchars($row['releasedate']);
                    $seats = htmlspecialchars($row['seats']);
                    $modelyear = htmlspecialchars($row['modelyear']);
                    $finaldrive = htmlspecialchars($row['finaldrive']);
                    $modelgrade = htmlspecialchars($row['modelgrade']);
                    $specregion = htmlspecialchars($row['specregion']);
                    $insurance = htmlspecialchars($row['insurance']);
                    $note = htmlspecialchars($row['note']);  
                    $mainimage = htmlspecialchars($row['mainimage']);
                    $status = htmlspecialchars($row['status']);
                    $staffID = htmlspecialchars($row['staffID']);
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
       <div class="secContainer">
          <div class="mainSection">

                <?php 
                    if($mainimage!=""){   
                        ?>
                         <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Main Page Image">
                        <?php
                    }
                    else{
                        echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                    }
                ?>
             

              <div class="secText">
                <h3 class="carName">
                  <?php echo $carname;?>
                  </h3>
                  <p>
                    <?php echo $finaldrive;?>
                  </p>

                  <span class="price">€<?php echo $price;?></span>
              </div>
                
                <div class="carMenu flex">
                    <a href="#overview">
                       Apercu
                    </a>
                    <a href="#features">
                        Caractéristiques
                    </a>
                    <a href="#alternatives">
                    Options
                    </a>
                    <a href="#gallery">
                        Gallerie
                    </a>
                </div>

          </div>

           <!-- overviewSection Section Starts -->
          <div class="overviewSection" id="overview">
            <div class="secContainer container">
                <div class="secTitleDiv">
                    <h2 class="secTitle">Apercu</h2>
                    <P>
                    Des trésors d'élégance et de performance vous attendent
                    </P>
                </div>
                 <div class="content grid">
                   <span class="span"> Carrosserie: <span class="ans"><?php echo $price;?></span></span>
                   <span class="span"> Année: <span class="ans"><?php echo $modelyear;?></span></span>
                   <span class="span"> Transmission finale: <span class="ans"><?php echo $finaldrive;?></span></span>
                   <span class="span"> Niveau du modél: <span class="ans"><?php echo $modelgrade;?></span></span>
                   <span class="span"> Zone de spécification: <span class="ans"><?php echo $specregion;?></span></span>
                   <span class="span"> Réservoir: <span class="ans"><?php echo $fuel;?></span></span>
                   <span class="span"> Type de moteur: <span class="ans"><?php echo $engine;?></span></span>
                  


                 </div>
            </div>
          </div>
          <!-- overviewSection Section Ends -->


          <!-- featuresSection Section Starts -->
          <div class="featuresSection section" id="features">
            <div class="secContainer container">
                <div class="secTitleDiv">
                    <h2 class="secTitle"> Caractéristiques</h2>
                    
                </div>
                 <div class="content grid">
                    <div class="singleCard">
                        <span class="title">
                            Style
                        </span>
                        <?php echo $bodystyle;?>
                    </div>

                    <div class="singleCard">
                        <span class="title">
                            Performance
                        </span>
                        <?php echo $performance;?>

                    </div>

                    <div class="singleCard">
                        <span class="title">
                            Securité
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
          </div>
           <!-- featuresSection Section Ends -->

          <!-- Gallery Section Starts -->
          <div class="gallerSection section" id="gallery">
            <div class="secConatiner container">
                <div class="secTitleDiv">
                    <h2 class="secTitle">Gallerie</h2>
                    
                </div>

                <div class="content grid">
                  <div class="exteriorDiv grid">
                        <span class="title">
                            Exterieur
                        </span>
                       <div class="carImages grid">
                       <?php 
                            if($Interior1!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior1;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>

                       
                       <?php 
                            if($Interior2!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior2;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Interior3!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior3;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                        <?php 
                            if($Interior4!=""){   
                                ?>
                                <div class="singleImage">
                                 <img  src="<?php echo SITEURL;?>Assets/<?php echo $Interior4;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                  </div>

                  <div class="interior grid">
                        <span class="title">
                            Interieur
                        </span>
                        
                       <div class="carImages grid">
                       <?php 
                            if($Exterior1!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior1;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Exterior2!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior2;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Exterior3!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior3;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>
                       <?php 
                            if($Exterior4!=""){   
                                ?>
                                <div class="singleImage">
                                 <img class="mainImg" src="<?php echo SITEURL;?>Assets/<?php echo $Exterior4;?>" alt="Main Page Image">
                                </div>
                                <?php
                            }
                            else{
                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                            }
                        ?>

                       </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Gallery Section Ends -->

       </div>
    </div>
    <!-- Car Details Ends -->

    <!-- Alternatives Page Starts -->
    <div class="alternatives section container" id="alternatives">
        <div class="secContainer">
            <div class="secTitleDiv">
                <h2 class="secTitle">Notre collection</h2>
                
            </div>

              <div class="carsContainer">
                <div class="singleCompany grid">
                        <?php 
                            $sql = "SELECT * FROM cars";
                            $res = mysqli_query($conn, $sql);
                            if($res == TRUE){
                                $count =  mysqli_num_rows($res);

                                if($count > 0){
                                    while($row = mysqli_fetch_assoc($res)){
                                        $id = htmlspecialchars($row['id']);;
                                        $carname = htmlspecialchars($row['carname']);
                                        $price = htmlspecialchars($row['price']);
                                        $location = htmlspecialchars($row['location']);
                                        $priceinclusives =htmlspecialchars($row['priceinclusives']);
                                        $body = htmlspecialchars($row['body']);
                                        $fuel = htmlspecialchars($row['fuel']);
                                        $engine = htmlspecialchars($row['engine']);
                                        $bodystyle = htmlspecialchars($row['bodystyle']);
                                        $performance = htmlspecialchars($row['performance']);
                                        $safety = htmlspecialchars($row['safety']);
                                        $technology = htmlspecialchars($row['technology']);
                                        $releasedate = htmlspecialchars($row['releasedate']);
                                        $seats = htmlspecialchars($row['seats']);
                                        $modelyear = htmlspecialchars($row['modelyear']);
                                        $finaldrive = htmlspecialchars($row['finaldrive']);
                                        $modelgrade = htmlspecialchars($row['modelgrade']);
                                        $specregion = htmlspecialchars($row['specregion']);
                                        $insurance = htmlspecialchars($row['insurance']);
                                        $note = htmlspecialchars($row['note']);  
                                        $mainimage = htmlspecialchars($row['mainimage']);
                                        $status = htmlspecialchars($row['status']);

                                    ?>
                                    <!-- Single car card -->
                                    <div class="singleCar">
                                        <?php 
                                            if($mainimage!=""){   
                                                ?>
                                                <div class="imgDiv">
                                                <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                                </div>
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                                            }
                                        ?>
                                        
                                        <h5 class="carTitle">
                                        <?php echo $carname;?>
                                        </h5>

                                        <div class="properties grid">
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-group icon'></i>
                                                <span class="text">
                                                <?php echo $seats;?> Personne
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class="uis uis-anchor icon"></i>
                                                <span class="text">
                                                    Autopilote
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-calendar-event icon' ></i>
                                                <span class="text">
                                                <?php echo $modelyear;?>
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-gas-pump icon' ></i>
                                                <span class="text">
                                                <?php echo $fuel;?>
                                                </span>
                                            </div>
                                        </div>

                            
                                        <div class="price_seller flex">
                                        <span class="price">
                                            $<?php echo $price;?>
                                        </span>
                                        <a href="<?php echo SITEURL?>View/Frontend/carDetails.php?id=<?php echo $id?>">
                                            <span class="btn primaryBtn">
                                            Details
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                    <?php

                                    }
                                }

                                else{

                                    ?>
                                    <span>Pas de vehicule!</span>
                                    <?php
                                
                                }
                            }
                        ?>

                </div>
              </div>
        </div>
     </div>
    <!-- Alternatives Page Ends -->

    <!-- Cars Review Section Starts -->
    <div class="reviewSection section">
       <div class="secContainer container">
        <div class="secTitleDiv">
            <h2 class="secTitle">Votre avis nous interesse</h2>
            
        </div>

        <div class="formSection">

            <form method="POST" class="reviewForm grid" enctype="multipart/form-data">
                <div class="singleField">
                    <label for="reviewerName">Nom Complet</label>
                    <input type="text" id="reviewerName" name="reviewerName" placeholder="Nom complet"  required>
                </div>

                <div class="singleField">
                    <label for="nationality">Nationalité</label>
                    <input type="nationality" id="nationality" name="nationality" placeholder="Nationalité"  required>
                </div>

                <div class="singleField">
                    <label for="reviewText">Avis</label>
                    <textarea id="reviewText" name="reviewText" placeholder="Avis" ></textarea>
                </div>

                <div class="singleField">
                    <label for="reviewerImage">Image <small>(Facultatif)</small> </label>
                    <input type="file" name="reviewerImage" id="picture" >
                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="reviewedCarID" value="<?php echo $id;?>">
                </div>


                <button class="bg btn flex primaryBtn" name="submit">Ajouter 
                    <i class='bx bx-right-arrow-alt icon'></i>
                </button>
            
            </form>

        </div>
       </div>
    </div>
    <!-- Cars Review Section Ends -->

     <!-- Buy Button -->
     <a href="<?php echo SITEURL?>View/Frontend/staffDetailsFront.php?id=<?php echo $staffID;?>" class="actionBtn flex">Contactez nous <i class='bx bxs-user-voice icon' ></i></a>
    <!-- Buy Button -->

    <?php
include('./clientPartials/footer.php');

if (isset($_POST['submit'])) {
    // Vérification de la session
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['notLoggedIn'] = '<span class="fail" style="color: red;">Connectez-vous!</span>';
        header('location:' . SITEURL . 'View/frontend/staffLogin.php');
        exit();
    }

    // Validation et échappement des données du formulaire
    $carID = mysqli_real_escape_string($conn, $_POST['reviewedCarID']);
    $reviewerName = mysqli_real_escape_string($conn, $_POST['reviewerName']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $reviewText = mysqli_real_escape_string($conn, $_POST['reviewText']);
    $reviewerImage = mysqli_real_escape_string($conn, $_POST['reviewerImage']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    // ...

    // Utilisation de requêtes préparées
    $stmt = $conn->prepare("INSERT INTO reviews (carID, reviewerName, nationality, review, reviewerImage, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $selectedCasrID, $reviewerName, $nationality, $reviewText, $reviewerImage, $status);

    // Exécution de la requête
    if ($stmt->execute()) {
        $_SESSION['addedReview'] = '<span class="success">Avis ajouté avec succés!</span>';
        header('location:' . SITEURL . 'View/Frontend/carDetails.php?id=' . $selectedCasrID);
        exit();
    } else {
        die('Failed to connect to database!');
    }

    $stmt->close();
    $conn->close();
}
?>
