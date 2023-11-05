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
                    Liste de réparation
                </h1>

                <?php

                    if(isset($_SESSION['addedRepair'])){
                        echo $_SESSION['addedRepair'];
                        unset($_SESSION['addedRepair']);
                    }
                    if(isset($_SESSION['updateRepair'])){
                        echo $_SESSION['updateRepair'];
                        unset($_SESSION['updateRepair']);
                    }
                    if(isset($_SESSION['deleteRepair'])){
                        echo $_SESSION['deleteRepair'];
                        unset($_SESSION['deleteRepair']);
                    }
                
                ?>
                <p>Bienvenue. Admin!</p>

                <a href="Addrepair.php"><button  class="flex btn bg">
                    <i class="uil uil-plus"></i> Ajouter une réparation
                </button></a>
            </div>
 

            <div class="allProperties">
                <table>
                    <tr>
                    <th>Type de réparation</th>
                    <th>Date</th>
                    
                    
                    <th>Status</th>
                    <th>Action</th>
                    </tr>

                    <?php 
                        $sql = 'SELECT * FROM repairing';
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                $id = $row['id'];
                                $mainimage = $row['mainImage'];
                                $repairType = $row['repairType'];
                                $date = $row['date'];
                                $price=$row['price'];
                                $status = $row['status'];
                                

                                ?>
                                <tr>
                                    <td class="td flex">

                                    <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="imgDiv">
                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="mainImage">
                                            </div>
                                        
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                        }
                                    ?>
                                    
                                        <div class="carInfo">
                                            <span class="name"><?php echo $repairType?></span>
                                            <p><?php echo $repairType?></p>
                                            <i class="uil uil-moneybag-alt"></i> 
                                            <small>€<?php echo $price?></small>
                                        </div>
                                    </td>

                                    <td class="modelYear trText">
                                        
                                    <span class="year"><?php echo $date?></span>
                                    
                                    </span>
                                        
                                    </td>

                                    

                                    <td class="status">
                                        <?php
                                        if($status == 'Finish'){
                                            ?>
                                            <span><i class="uil uil-check-circle icon"></i>Terminé</span>
                                            
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <div class="Depending">
                                            <span>En attente</span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        
                                    </td>

                                    <td class="action">
                                        
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/updateRepair.php?id=<?php echo $id?>">
                                            <i class="uil uil-edit icon"></i>
                                        </a>
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/deleterepair.php?id=<?php echo $id?>">
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
    /*partie type*/


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $repairType = $_POST['repairName'];
    $date = $_POST['Date'];
    $status = $_POST['status'];
    $staffID = $_POST['staffID'];

    switch ($repairType) {
        case 'Rampe pour voiture':
            $price = 50; // 
            break;
        case 'Gaz d\'échappement':
            $price = 150; //
            break;

            case 'Réparation & changement des freins':
                $price = 150; // 
                break;

                case 'Vidange':
                    $price = 70; 
                    break;

                    case 'Service de Gonflage des Roues':
                        $price = 20; 
                        break;
        // ... Ajoutez des cases pour les autres types de réparation avec les prix appropriés
        default:
            $price = 0; // Prix par défaut (si le type n'est pas reconnu)
    }

    $repairType = mysqli_real_escape_string($conn, $repairType);
    $date = mysqli_real_escape_string($conn, $date);
    $price = mysqli_real_escape_string($conn, $price);
    $status = mysqli_real_escape_string($conn, $status);
    $staffID = mysqli_real_escape_string($conn, $staffID);

    $sql = "INSERT INTO repairing (repairType, date, price, status, staffID) VALUES ('$repairType', '$date', '$price', '$status', '$staffID')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['addedRepair'] = '<span class="success">Réparation ajoutée avec succès, ajouter encore?</span>';
        header('location:' . SITEURL . 'View/Backend/Admin/repair.php');
        exit();
    } else {
        die('Erreur d\'insertion dans la base de données : ' . mysqli_error($conn));
    }
}

include('./adminPartials/adminFooter.php');
?>



<?php 
include('./adminPartials/adminFooter.php');
?>