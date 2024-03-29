<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
            include('./adminPartials/sideMenu.php');
        ?>

        <div class="propertiesBody">
            <div class="top flex">
                <h1 class="titleText">
                   Véhicules
                </h1>

                <?php
if(isset($_SESSION['addedCar'])){
    echo htmlentities($_SESSION['addedCar'], ENT_QUOTES, 'UTF-8');
    unset($_SESSION['addedCar']);
}
if(isset($_SESSION['updateCar'])){
    echo htmlentities($_SESSION['updateCar'], ENT_QUOTES, 'UTF-8');
    unset($_SESSION['updateCar']);
}
if(isset($_SESSION['deleteCar'])){
    echo htmlentities($_SESSION['deleteCar'], ENT_QUOTES, 'UTF-8');
    unset($_SESSION['deleteCar']);
}
?>

                <p>Bienvenue. Admin!</p>

                <a href="addCar.php"><button  class="flex btn bg">
                    <i class="uil uil-plus"></i> Ajouter un vehicule
                </button></a>
            </div>
 

            <div class="allProperties">
                <table>
                    <tr>
                    <th>Voiture</th>
                    <th>Année</th>
                    <th>Niveau de modèle</th>
                    <th>Réservoir</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>

                    <?php 
                        $sql = 'SELECT * FROM cars';
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
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
                                

                                ?>
                                <tr>
                                    <td class="td flex">

                                    <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="imgDiv">
                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                            </div>
                                        
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                        }
                                    ?>
                                    
                                        <div class="carInfo">
                                            <span class="name"><?php echo $carname?></span>
                                            <p><?php echo $modelgrade?></p>
                                            <i class="uil uil-moneybag-alt"></i> 
                                            <small>€<?php echo $price?></small>
                                        </div>
                                    </td>

                                    <td class="modelYear trText">
                                        
                                    <span class="year"><?php echo $releasedate?></span>
                                    
                                    </span>
                                        
                                    </td>

                                    <td class="modelGrade trText">
                                        
                                        <span class="grade"><?php echo $modelgrade?></span>
                                        
                                        
                                    </td>
                                    <td class=" feul trText">
                                        
                                        <span class="grade"><?php echo $fuel?></span>
                                        
                                        
                                    </td>

                                    <td class="status">
                                        <?php
                                        if($status == 'sold'){
                                            ?>
                                            <span><i class="uil uil-check-circle icon"></i> Vendue</span>
                                            
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <div class="onMarket">
                                            <span>Disponible</span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        
                                    </td>

                                    <td class="action">
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/carDetails.php?id=<?php echo $id?>">
                                            <i class="uil uil-file-info-alt icon"></i>
                                        </a>
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/updateCar.php?id=<?php echo $id?>">
                                            <i class="uil uil-edit icon"></i>
                                        </a>
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/deleteCar.php?id=<?php echo $id?>">
                                            <i class="uil uil-trash-alt icon"></i>
                                        </a>
                                    
                                    </td>
                                
                                </tr>
                                <?php

                                }
                            }
                        }
                    ?>


                </table>
            </div>
        </div>

    </div>
<?php 
include('./adminPartials/adminFooter.php');
?>