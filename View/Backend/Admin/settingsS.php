<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>
    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuS.php');
        ?>

        <div class="settingsBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                   Paramétres
                </h1>
                <p>Consultez vos détails et mettez-les à jour si nécessaire.</p>

                
            </div>

            <div class="settingsDiv">
                <div class="adminDetails">

                    <?php 

                        $sessionUser = $_SESSION['username'];
                        $sql = "SELECT * FROM staff where username ='$sessionUser'";
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
                                $password = $row['password'];
                                }
                            }
                        }
                    ?>

                    <h3 class="detailsTitle">Details de l'administrateur</h3>

                    <div class="detailsContainer">
                        <div class="detaialsDiv">
                            <?php 
                                if($coverpic!=""){   
                                    ?>
                                    <div class="coverPic">
                                        <img src="<?php echo SITEURL;?>Assets/<?php echo $coverpic;?>" alt="Car Image">
                                        <span class="coverOverlay"><?php echo $firstname;?> <?php echo $secondname;?></span>
                                    </div>
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                }
                            ?>


                            <?php 
                                if($profilepic!=""){   
                                    ?>
                                    <div class="profilePic">
                                        <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Car Image">
                                    </div>
                                    <?php
                                }
                                else{
                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                }
                            ?>

                           <div class="detailsBody flex">
                               <div class="leftDiv">
                                    <h2><?php echo $firstname;?> <?php echo $secondname;?></h2>
                                    <span class="level flex"><i class="uil uil-award icon" ></i> <?php echo $role;?></span>
                                    <p><?php echo $email;?></p>

                                    <div class="socials">
                                    <a href="<?php echo $facebook ?>" target='blank'><i class="uil uil-facebook-messenger icon"></i></a>

                                    <a href="<?php echo $twitter ?>" target='blank'><i class="uil uil-twitter icon"></i></a>

                                    <a href="<?php echo $instagram ?>" target='blank'><i class="uil uil-instagram-alt icon"></i></a>

                                    <a href="<?php echo $linkedin ?>" target='blank'><i class="uil uil-linkedin icon"></i></a>
                                    </div>
                                </div>

                                <div class="rightDiv flex">
                                    <div>
                                        <div class="singleDetail">
                                            <span class="label">Prénom</span>
                                            <span class="value"><?php echo $firstname;?></span>
                                        </div>
        
                                        <div class="singleDetail">
                                            <span class="label">Nom</span>
                                            <span class="value"><?php echo $secondname;?></span>
                                        </div>
        
                                        <div class="singleDetail">
                                            <span class="label">Nom d'utilisateur</span>
                                            <span class="value"><?php echo $username;?></span>
                                        </div>
                                    </div>

                                <div>
                                        <div class="singleDetail">
                                            <span class="label">ID de l'employé</span>
                                            <span class="value">#<?php echo $id;?></span>
                                        </div>

                                        <div class="singleDetail">
                                            <span class="label">Numéro de télephone</span>
                                            <span class="value"><?php echo $phone;?></span>
                                        </div>
                                        
                                        <div class="singleDetail">
                                            <span class="label">Date de naissance</span>
                                            <span class="value"><?php echo $dob;?></span>
                                        </div> 
                                </div>
                                
                                <div>
                                        <div class="singleDetail">
                                            <span class="label">Sexe</span>
                                            <span class="value"><?php echo $gender;?></span>
                                        </div>

                                        <div class="singleDetail">
                                            <span class="label">Experience</span>
                                            <span class="value"><?php echo $experience;?> Years</span>
                                        </div>

                                        <div class="singleDetail">
                                            <span class="label">Temps de réponse</span>
                                            <span class="value"><?php echo $response;?> Minutes</span>
 
                                        </div>
                                </div>

                                </div>
                           </div>
                        </div>
                    </div>

                    <h3 class="updateTitle">Mettre a jour les details</h3>
                    <div class="formContainer">
                    <form method="POST" class="flex" enctype="multipart/form-data">
                        <div>
                        <div class="singleField">
                            <label for="FirstName">Prénom</label>
                            <input type="text" id="FirstName" name="firstName"  value="<?php echo $firstname?>">
                        </div>

                        <div class="singleField">
                            <label for="secName">Nom</label>
                            <input type="text" id="secName" name="secondName"  value="<?php echo $secondname?>">
                        </div>

                        <div class="singleField">
                            <label for="userName">Nom d'utilisateur</label>
                            <input type="text" id="userName" name="userName" value="<?php echo $username?>">
                        </div>

                        <div class="singleField">
                            <label for="phone">Numéro de télephone</label>
                            <input type="number" id="phone" name="phone" value="<?php echo $phone?>">
                        </div>

                        <div class="singleField">
                            <label for="profilePicture">Photo de profil </label>
                            <input type="file" name="profilePicture" id="profilePicture" value="<?php echo $profilepic?>">
                        </div>

                        </div>

                        <div>

                            <div class="singleField">
                                <label for="coverPic">Photo de couverture </label>
                                <input type="file" name="coverPic" id="coverPic" value="<?php echo $coverPic?>">
                            </div>


                            <div class="singleField">
                                <label for="email">Addresse mail</label>
                                <input type="email" id="email" name="email" value="<?php echo $email?>">
                            </div>

                            <div class="singleField">
                                <label for="nationality">Nationalité</label>
                                <input type="text" id="nationality" name="nationality" value="<?php echo $nationality?>">
                            </div>

                            <div class="singleField">
                                <label for="dob">Date de naissance</label>
                                <input type="date" id="dob" name="dob" value="<?php echo $dob?>">
                            </div>

                            <div class="singleField">
                                <label for="gender">Sexe</label>
                                <input type="text" id="gender" name="gender" value="<?php echo $gender?>">
                            </div>

                        </div>

                        <div class="socialLinks">
                            <div class="singleField">
                                <label for="facebook">Facebook</label>
                                <input type="url" id="facebook" name="fbLink" value="<?php echo $facebook?>">
                            </div>

                            <div class="singleField">
                                <label for="twitter">Twitter</label>
                                <input type="url" id="twitter" name="twtLink" value="<?php echo $twitter?>">
                            </div>

                            <div class="singleField">
                                <label for="instagram">Instagram</label>
                                <input type="url" id="instagram" name="igLink" value="<?php echo $instagram?>">
                            </div>

                            <div class="singleField">
                                <label for="linkedin">LinkedIn</label>
                                <input type="url" id="linkedin" name="linkedinLink" value="<?php echo $linkedin?>">
                            </div>

                            <div class="singleField">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" value="<?php echo $password?>">
                            </div>
                        </div>

                        <div>
                            <div class="singleField">
                                <label for="language">Langue</label>
                                <input type="text" id="language" name="language" value="<?php echo $language?>">
                            </div>

                            <div class="singleField">
                                <label for="experience">Experience</label>
                                <input type="number" id="experience" name="experience" value="<?php echo $experience?>">
                            </div>

                            <div class="singleField">
                                <label for="response">Temps de réponse</label>
                                <input type="number" id="response" name="response" value="<?php echo $response?>">
                            </div>


                            <button class="btn flex bg" name="submit" style="width:
                            100%; margin-top:2rem"><i class="uil uil-fidget-spinner icon"></i>Mettre a jour mon profil</button>
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
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $fbLink = $_POST['fbLink'];
  $twtLink = $_POST['twtLink'];
  $igLink = $_POST['igLink'];
  $linkedinLink = $_POST['linkedinLink'];
  $password = $_POST['password'];
  $language = $_POST['language'];
  $experience = $_POST['experience'];
  $response = $_POST['response'];
  $role = $_POST['role'];
  $status = $_POST['status'];


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


   //  Uploading Cover Picture to the database =======================>

   if(isset($_FILES['coverPic']['name'])){
    //To upload the image we need the image name, source and destination.
    $coverPic = $_FILES['coverPic']['name'];
    // Source ================>
    $imageSource = $_FILES['coverPic']['tmp_name'];
    // Destination ================>
    $imageDestination = "../Assets/dbImages".$coverPic; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
            // header('location:' .SITEURL. '.php');
   
    }
  }else{
    
    $coverPic ="";
    }

  $sql = "UPDATE staff SET
  firstname = '$firstName',
  secondname = '$secondName',
  username = '$userName',
  phone = '$phone',
  profilepic = '$profilePicture',
  coverpic = '$coverPic',
  email = '$email',
  nationality = '$nationality',
  dob = '$dob',
  gender = '$gender',
  facebook = '$fbLink',
  twitter = '$twtLink',
  instagram = '$igLink',
  linkedin = '$linkedinLink',
  password = '$password',
  language = '$language',
  experience = '$experience',
  response = '$response',
  status = '$status',
  role = '$role'
  where id = $id
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['credentialsChanged'] = '<span class="success">Credentials Updates, login!</span>';
      header('location:'.SITEURL. 'View/Frontend/staffLogin.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>