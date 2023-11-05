<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenu.php');
        ?>

        <div class="addStaffBody">
            <div class="top flex">
                <h1 class="titleText">
                    Ajouter un nouvel agent
                </h1>
                
            </div>

            <div class="newAgentDiv">
                <h3 class="formTitle">Remplissez tout le formulaire ce dessous!</h3>

                <form method="POST" class="flex" enctype="multipart/form-data">
                    <div>
                      <div class="singleField">
                          <label for="FirstName">Prénom</label>
                          <input type="text" id="FirstName" name="firstName" placeholder="e.g: Vincent" required>
                      </div>

                      <div class="singleField">
                          <label for="secName">Nom</label>
                          <input type="text" id="secName" name="secondName" placeholder="e.g: Parrot" required>
                      </div>

                      <div class="singleField">
                          <label for="userName">Nom d'utilisateur</label>
                          <input type="text" id="userName" name="userName" placeholder="e.g: Parrot123" required>
                      </div>

                      <div class="singleField">
                          <label for="phone">Numéro de telephone</label>
                          <input type="number" id="phone" name="phone" placeholder="e.g: +33623693819" required>
                      </div>

                      <div class="singleField">
                          <label for="profilePicture">Photo de profil </label>
                          <input type="file" name="profilePicture" id="profilePicture" required>
                      </div>

                      
                      <div class="singleField">
                              <label for="coverPic">Photo de couverture </label>
                              <input type="file" name="coverPic" id="coverPic" required>
                        </div>


                    </div>

                      <div>
                          <div class="singleField">
                              <label for="email">Adresse email</label>
                              <input type="email" id="email" name="email" placeholder="e.g: example@outlook.com" required>
                          </div>

                          <div class="singleField">
                              <label for="nationality">Nationalité</label>
                              <input type="text" id="nationality" name="nationality" placeholder="e.g: Canada" required>
                          </div>

                          <div class="singleField">
                              <label for="dob">Date de naissance</label>
                              <input type="date" id="dob" name="dob" placeholder="e.g: 1989/8/14" required>
                          </div>

                          <div class="singleField">
                              <label for="gender">Sex</label>
                              <input type="text" id="gender" name="gender" placeholder="e.g: male" required>
                          </div>

                          <div class="singleField">
                              <label for="desc">Description</label>
                              <textarea name="description" id="desc" placeholder="Description de Staff " maxlength="255"></textarea>
                          </div>

                      </div>

                      <div class="socialLinks">
                          <div class="singleField">
                              <label for="facebook">Facebook</label>
                              <input type="url" id="facebook" name="fbLink" placeholder="https://www.facebook.com" required>
                          </div>

                          <div class="singleField">
                              <label for="twitter">Twitter</label>
                              <input type="url" id="twitter" name="twtLink" placeholder="https://www.twitter.com" required>
                          </div>

                          <div class="singleField">
                              <label for="instagram">Instagram</label>
                              <input type="url" id="instagram" name="igLink" placeholder="https://www.instagram.com" required>
                          </div>

                          <div class="singleField">
                              <label for="linkedin">LinkedIn</label>
                              <input type="url" id="linkedin" name="linkedinLink" placeholder="https://www.linkedin.com" required>
                          </div>

                          <div class="singleField">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                          </div>
                      </div>

                     <div>
                          <div class="singleField">
                              <label for="language">Langue maternelle</label>
                              <input type="text" id="language" name="language" placeholder="Primary Language" required>
                          </div>

                          <div class="singleField">
                              <label for="experience">Experience</label>
                              <input type="number" id="experience" name="experience" placeholder="e.g:2012" required>
                          </div>

                          <div class="singleField">
                              <label for="response">Temps de reponse</label>
                              <input type="number" id="response" name="response" placeholder="e.g:15" required>
                          </div>

                          <div class="singleField">
                            <label for="role">Role</label>
                            <select name="role" id="role">
                                <option value="admin">Administrateur</option>
                                <option value="staff" selected>Staff/Agent</option>
                            </select>
                           </div>

                          <div class="singleField">
                            <label for="status">Status</label>
                            <select name="status" id="status">
                                <option value="verified" >Verifié</option>
                                <option value="not verified" selected>Non verifié</option>
                            </select>
                           </div>

                          <button class="btn flex bg" name="submit" style="width:
                          100%; margin-top:2rem"><i class="uil uil-fidget-spinner icon"></i>Ajouter Staff</button>
                     </div>

                     
                 </form>
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
  $description = $_POST['description'];
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

  $sql = "INSERT INTO staff SET
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
  description = '$description',
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
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedStaff'] = '<span class="success">Administrator Added Successfully!</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/staff.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>