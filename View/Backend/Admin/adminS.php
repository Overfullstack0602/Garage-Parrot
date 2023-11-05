<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuS.php');
        ?>

            <?php 
                $sql = 'SELECT * FROM cars';
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $carsCount =  mysqli_num_rows($res);
                }
            ?>
            <?php 
                $sql = 'SELECT * FROM staff';
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $staffCount =  mysqli_num_rows($res);
                }
            ?>
            <?php 
                $sql = "SELECT * FROM cars where status = 'sold'";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $soldCarsCount =  mysqli_num_rows($res);
                }
            ?>
            <?php 
              // Get the values from the database=========>
              $sql = "SELECT * FROM cars WHERE status = 'sold'";
              $res = mysqli_query($conn, $sql);
              $totalRevenue = 0;
              if($res==TRUE){
                  $closedReservations = mysqli_num_rows($res);
                  if($closedReservations > 0){
                      while($eachRow = mysqli_fetch_assoc($res)){
                        $id = $eachRow['id'];
                        $eachCarPrice = $eachRow['price'];
                        $totalRevenue += $eachCarPrice; 
                      }
                  }
              }

            ?>

<?php
$sessionUser = mysqli_real_escape_string($conn, $_SESSION['username']);

$sql = "SELECT * FROM staff WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $sessionUser);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    if ($res) {
        $count = mysqli_num_rows($res);

        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $staffID = $row['id'];
            }
        } else {
            echo "<span>Rien pour le moment!</span>";
        }
    }

    mysqli_stmt_close($stmt);
}
?>



        <div class="body">
            <div class="top flex">
                <h1 class="titleText">
                    Staff tableau de bord
                </h1>

                    <?php 
                        if(isset($_SESSION['loginMessage'])){
                            echo $_SESSION['loginMessage'];
                            unset($_SESSION['loginMessage']);
                        }
                    ?> 
                <p>Bienvenue staff!</p>
            </div>

                    
            
            <div class="summaryDiv flex">
                <div>
                    <h1><?php echo $carsCount?></h1>
                    <p>Vehicules</p>
                    <small>Que les vehicules verifiés</small>
                    <h1 class="overlay"><?php echo $carsCount?></h1>
                </div>
                <div>
                    <h1><?php echo $staffCount?></h1>
                    <p>STAFF</p>
                    <small>Que les staffs verifiés</small>
                    <h1 class="overlay"><?php echo $staffCount?></h1>
                </div>
                <div>
                    <h1><?php echo $soldCarsCount?></h1>
                    <p>Ventes</p>
                    <small>Ventes complétées</small>
                    <h1 class="overlay"><?php echo $soldCarsCount?></h1>
                </div>
                <div>
                    <h1 title="View For Super Administrator Only">V/P</h1>
                    <p>. REVENUE</p>
                    <small>Que le super admin</small>
                    
                </div>
            </div>

            <div class="homeTodos">
                <div class="todoDiv">
                    <div class="divTitle flex">
                        
                    </div>

                    
    
                    <div class="todos flex">
                        
                    </div>
    
                   
                </div>
            </div>

            <div class="summaryPropertyDiv">
                <div class="divTitle flex">
                    <h3>Nos vehicules </h3>
                    <div class="line"></div>
                    <div>
                         <a href="<?php echo SITEURL?>View/Backend/Admin/carsS.php" class="flex btn">
                            tout les vehicules
                            <i class="uil uil-angle-right-b icon"></i>
                         </a>
                    </div>
                </div>
               <div class="propertyContainer flex">
                    
                    <?php 
                        $sql2 = "SELECT * FROM cars where status = 'On Market' order by rand() limit 0,4";
                        $res2 = mysqli_query($conn, $sql2);
                        if($res2 == TRUE){
                            $count =  mysqli_num_rows($res2);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res2)){
                                $carId = $row['id'];
                                $carname = $row['carname'];
                                $price = $row['price'];
                                $location = $row['location'];
                                $mainimage = $row['mainimage']; 
                                $staffID = $row['staffID'];
                                

                                ?>
                                <div class="singleProperty">
                                    <div class="imgDiv">
                                    <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <img class="apartImg" src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                        
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                        }
                                    ?>
                                        <div class="location loctionActive">
                                            <span class="apartName">
                                             <?php echo $carname;?>
                                            </span>
                                            <span class="propertyLocation">
                                             <?php echo $location;?>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="imgInfo">
                                        <?php 
                                            $sql = "SELECT * FROM staff where id ='$staffID'";
                                            $res = mysqli_query($conn, $sql);
                                            if($res == TRUE){
                                                $count =  mysqli_num_rows($res);

                                                if($count > 0){
                                                    while($row = mysqli_fetch_assoc($res)){
                                                    $id = $row['id'];
                                                    $profilepic = $row['profilepic'];
                                                    }
                                                }
                                            }
                                        ?>

                                        <?php 
                                            if($profilepic!=""){   
                                                ?>
                                                <div class="tenantImage">
                                                <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                                </div>
                                            
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                            }
                                        ?>

                                        <div class="amenities flex">
                                            <p class="flex"><i class='bx bxs-group icon'></i></p>

                                            <p class="flex"><i class='bx bxs-gas-pump icon' ></i></p>

                                            <p class="flex"><i class='bx bx-tachometer icon'></i></p>

                                            <p><i class="uis uis-anchor icon"></i></p>
                                        </div>
                                        
                                        <div class="flex">
                                            <h1 class="price">€<?php echo $price?></h1>
                                            <span class="status"><i class="uil uil-exclamation-triangle icon"></i></span>
                                        </div>
                                
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/carsS.php?id=<?php echo $carId?>">
                                            <button class="btn">
                                                Voir les details  <i class="uil uil-arrow-up-right icon"></i>
                                            </button>
                                        </a>
                        
                                    </div>
                                </div> 
                                <?php

                                }
                            }
                        }
                    ?>
               </div>

               
            </div>

            
           
        </div>
    </div>

    <!-- Link to js -->
    <script src="./admin.js"></script>
<?php 
include('./adminPartials/adminFooter.php');
?>