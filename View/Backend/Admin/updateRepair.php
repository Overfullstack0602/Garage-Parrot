<?php
include('./adminPartials/adminHeader.php');
ob_start();
?>
<div class="adminDasboard flex">
    <?php
    include('./adminPartials/sideMenu.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $repairType = $_POST['repairName'];
        $date = $_POST['Date'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $staffID = $_POST['staffID'];

        
        if (!empty($repairType) && !empty($date) && !empty($price) && !empty($status) && !empty($staffID)) {

            
            $repairType = mysqli_real_escape_string($conn, $repairType);
            $date = mysqli_real_escape_string($conn, $date);
            $price = mysqli_real_escape_string($conn, $price);
            $status = mysqli_real_escape_string($conn, $status);
            $staffID = mysqli_real_escape_string($conn, $staffID);

            
            $mainImage = $_FILES['mainImage']['name'];
            $mainImageTmp = $_FILES['mainImage']['tmp_name'];
            $mainImagePath = 'chemin/vers/dossier/' . $mainImage;

            move_uploaded_file($mainImageTmp, $mainImagePath);

            $sql = "INSERT INTO repairing (repairType, date, price, status, staffID, mainImage) VALUES ('$repairType', '$date', '$price', '$status', '$staffID', '$mainImage')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $_SESSION['addedRepair'] = '<span class="success">Réparation ajoutée avec succès, ajouter encore?</span>';
                header('location:' . SITEURL . 'View/Backend/Admin/repair.php');
                exit();
            } else {
                die('Erreur d\'insertion dans la base de données : ' . mysqli_error($conn));
            }
        } else {
            echo "Veuillez remplir tous les champs.";
        }
    }
    ?>

    <div class="addCarBody">
        <div class="top flex">
            <h1 class="titleText">
                Mettez a jour les détails de la réparation
            </h1>

        </div>

        <div class="newCarDiv">
            <h3 class="formTitle">Remplissez tout les champs!</h3>

            <form method="POST" class="" enctype="multipart/form-data">
                <div class="flex formContainer">
                    <div>
                        <div class="singleField">
                            <label for="repairType">Type de réparation</label>
                            <input type="text" name="repairName" id="repairName" placeholder="e.g: Vidange" required>
                        </div>

                        <div class="singleField">
                            <label for="price">Prix de réparation</label>
                            <input type="text" name="price" id="price" placeholder="200€" required>
                        </div>

                        <div class="singleField">
                            <label for="Date">Date</label>
                            <input type="date" name="Date" id="Date" required>
                        </div>

                        <div class="singleField">
                            <label for="staffID">Staff concerné</label>
                            <select name="staffID" id="staffID" required>
                                <?php
                                $sql = "SELECT * FROM staff where status ='verified'";
                                $res = mysqli_query($conn, $sql);
                                if ($res == TRUE) {
                                    $count = mysqli_num_rows($res);

                                    if ($count > 0) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            $id = $row['id'];
                                            $firstname = $row['firstname'];
                                ?>
                                            <option value="<?php echo $id ?>"><?php echo $id ?> <?php echo $firstname ?></option>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="singleField">
                            <label for="status">Status</label>
                            <select name="status" id="status">
                                <option value="Depending" selected>En attente</option>
                                <option value="Finish">Terminé</option>
                            </select>
                        </div>

                        <div class="singleField">
                            <label for="mainImage">Image <small>(principale)</small></label>
                            <input type="file" name="mainImage" id="mainImage" required>
                        </div>
                    </div>
                </div>

                <button class="btn flex bg" style="width: 100%;" name='submit'>
                    <i class="uil uil-plus icon"></i>
                    Mettre a jour
                </button>
            </form>
        </div>
    </div>
</div>

<?php
include('./adminPartials/adminFooter.php');
?>

