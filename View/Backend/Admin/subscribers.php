<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">
        
        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="subscribersBody">
            <div class="top flex">
                <h1 class="titleText">
                    Tout les abonnés
                </h1>

                <?php

                    if(isset($_SESSION['deletedSub'])){
                        echo $_SESSION['deletedSub'];
                        unset($_SESSION['deletedSub']);
                    }
                ?>
                <p>Bonjour staff, avez-vous dit bonjour à l'un d'entre eux aujourd'hui  <i class="uil uil-grin icon"></i>?</p>
            </div>

            <div class="clientsDiv">
                <table>
                    <tr>
                        <th>ID de l'abonné</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                        $sql = "SELECT * FROM subscribers";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $email = $row['email'];
                                    $date = $row['date'];

                                    ?>
                                    <tr>
                                        <td class="id"><?php echo $id?></td>

                                        <td class="subscriberEmial">
                                            <span class="occ flex"><?php echo $email?></span>
                                            <p>Abonnés: <?php echo $date?>
                                        </td>

                                        <td class="action">
                                        <a href="<?php echo SITEURL?>View/Backend/Admin/deleteSub.php?id=<?php echo $id?>">
                                            <i class="uil uil-trash-alt icon"></i>
                                        </a>
                                        </td>

                                    </tr>

                                    <?php   
                                }
                            }

                            else{
                                ?>
                                <span>Pas d'abonnés pour le moment!</span>
                                <?php
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