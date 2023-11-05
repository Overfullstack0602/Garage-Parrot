<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuClient.php');
        ?>

        <div class="settingsBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                   Paramétres
                </h1>
                <p>Vous pouvez mettre a jour vos informations!</p>
            </div>

            <?php 

                       echo $sessionUser = $_SESSION['username'];
                        $sql = "SELECT * FROM clients where username ='$sessionUser'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count == 1){
                                while($row = mysqli_fetch_assoc($res)){
                               echo $id = $row['id'];
                                $carID = $row['carID'];
                                $agentID = $row['agentID'];
                                $firstname	 = $row['firstname'];
                                $secondname = $row['secondname'];
                                $email = $row['email'];
                                $gender = $row['gender'];
                                $nationality = $row['nationality'];
                                $language = $row['language'];
                                $email = $row['email'];
                                $payment  = $row['payment'];
                                $insurance = $row['insurance'];
                                $username = $row['username'];
                                $password = $row['password'];
                                $dob = $row['dob'];
                                }
                            }
                        }
                    ?>

            <div class="settingsDiv">
                <div class="clientsDetails">

                    <h3 class="updateTitle">Mettre a jour mes informations</h3>
                    <div class="formContainer">
                       <form method="POST" class="flex" enctype="multipart/form-data">
                          <div>
                            <div class="singleField">
                                <label for="FirstName">Prénom</label>
                                <input type="text" id="FirstName" name="firstName" value="<?php echo $firstname;?>">
                            </div>

                            <div class="singleField">
                                <label for="secName">Nom</label>
                                <input type="text" id="secName" name="secondName" value="<?php echo $secondname;?>" >
                            </div>

                            <div class="singleField">
                                <label for="userName">Nom d'utilisateur</label>
                                <input type="text" id="userName" name="userName" value="<?php echo $username;?>">
                            </div>


                          </div>

                          <div>
                            <div class="singleField">
                                <label for="phone">Numéro de telephone</label>
                                <input type="number" id="phone" name="phone" placeholder="e.g +5436964598">
                            </div>

                            <div class="singleField">
                                <label for="profilePicture">Photo de profil </label>
                                <input type="file" name="profilePicture" id="profilePicture">
                            </div>
                            
                            <div class="singleField">
                                <label for="email">Addresse email</label>
                                <input type="email" id="email" name="email" value="<?php echo $email;?>">
                            </div>
                          </div>

                            <div>
                                <div class="singleField">
                                    <label for="nationality">Nationalité</label>
                                    <input type="text" id="nationality" name="nationality" value="<?php echo $nationality;?>">
                                </div>

                                <div class="singleField">
                                    <label for="dob">Date de naissance</label>
                                    <input type="date" id="dob" name="dob" value="<?php echo $dob;?>">
                                </div>

                                <div class="singleField">
                                    <label for="gender">Sexe</label>
                                    <input type="text" id="gender" name="gender" value="<?php echo $gender;?>">
                                </div>
  
                            </div>

                           <div>
                                <div class="singleField">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" id="password" name="password" value="<?php echo $password;?>">
                                </div>

                                <div class="singleField">
                                    <label for="language">Langue</label>
                                    <input type="text" id="language" name="language" value="<?php echo $language;?>">
                                </div>


                                <button class="btn flex bg" name="submit" style="width:
                                100%; margin-top:2.4rem" ><i class="uil uil-fidget-spinner icon"></i> Mettre a jour les informations</button>
                           </div>

                           
                       </form>
                    </div>
                </div>

            </div>
        </div>    
    </div> 
 
<?php 
include('./adminPartials/adminFooter.php');
?>


<?php 
if(isset($_POST['submit'])){

  $firstName = $_POST['firstName'];
  $secondName = $_POST['secondName'];
  $userName = $_POST['userName'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $nationality = $_POST['nationality'];
  $language = $_POST['language'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];


   //  Uploading Profile Picture to the database =======================>
     
   if(isset($_FILES['profilePicture']['name'])){
    //To upload the image we need the image name, source and destination.
    $profilePicture = $_FILES['profilePicture']['name'];
    // Source ================>
    $imageSource = $_FILES['profilePicture']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$profilePicture; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
            // header('location:' .SITEURL. '.php');
   
    }
  }else{
    
    $profilePicture ="";
    }


  $sql = "UPDATE clients SET
  firstname = '$firstName',
  secondname = '$secondName',
  username = '$userName',
  phone = '$phone',
  image = '$profilePicture',
  email = '$email',
  nationality = '$nationality',
  language = '$language',
  dob = '$dob',
  gender = '$gender',
  password = '$password'
  where id = $id
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['credentialsChanged'] = '<span class="success">Credentials Updates, login!</span>';
      header('location:'.SITEURL. 'View/Frontend/login.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>