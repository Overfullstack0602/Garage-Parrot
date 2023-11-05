<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>
  <div class="adminDasboard flex">

        <?php 
        include('./adminPartials/sideMenu.php');

        $sql = 'SELECT * FROM cars';
        $res = mysqli_query($conn, $sql);
        if($res == TRUE){
          $count =  mysqli_num_rows($res);

          if($count > 0){
              while($row = mysqli_fetch_assoc($res)){
                  $id = $row['id'];
              }
          }
        }
      ?>

      <div class="addCarBody">
          <div class="top flex">
              <h1 class="titleText">
                  Ajoutez les details du vehicule
              </h1>
              <p>Créez les meilleurs annonces pour les clients</p>
          </div>

          <div class="newCarDiv">
              <h3 class="formTitle">Remplissez tout les champs!</h3>

              <form method="POST"  class="" enctype="multipart/form-data">
                  <div class="flex formContainer">
                    <div>
                        <div class="singleField">
                            <label for="carName">Nom du véhicule</label>
                            <input type="text" name="carName" id="carName" placeholder="e.g: Mercedes Benz" required>
                        </div>

                        <div class="singleField">
                            <label for="carPrice">Prix du vehicule</label>
                            <input type="text" name="carPrice" id="carPrice" placeholder="20000€" required>
                        </div>

                        <div class="singleField">
                            <label for="carLocation">Lieu</label>
                            <input type="text" name="carLocation" id="carLocation" placeholder="Strasbourg" required>
                            
                        </div>

                        <div class="singleField">
                            <label for="carImage">Image <small>(principale)</small></label>
                            <input type="file" name="carImage" id="carImage" required>
                        </div>

    
                        <div class="singleField">
                            <label for="priceIncs">Prix tout compris</label>
                            <textarea name="priceIncs" id="priceIncs" placeholder=" Ce qui est inclue dans le prix" required></textarea>
                        </div>  

                        <div class="singleField">
                            <label for="body">Carrosserie</label>
                            <input type="text" name="body" id="body" placeholder="e.g: GX SUV" required>
                        </div>

                        <div class="singleField">
                            <label for="fuel">Réservoir</label>
                            <input type="text" name="fuel" id="fuel" placeholder="e.g: Diesel" required>
                        </div>

                    </div>

                    <div>

                        
                        
                        <div class="singleField">
                            <label for="engine">Type de moteur</label>
                            <input type="text" name="engine" id="engine" placeholder="e.g: 16V DOHC" required>
                        </div>

                        <div class="singleField">
                            <label for="bodyStyle">Style de carosserie <small>(Description)</small></label>
                            <textarea name="bodyStyle" id="bodyStyle" placeholder="style" ></textarea>
                        </div>
                        <div class="singleField">
                            <label for="Performance">Performance du vehicule <small>(Description)</small></label>
                            <textarea name="performance" id="Performance" placeholder="Performance" ></textarea>
                        </div>

                        <div class="singleField">
                            <label for="safety">Securité du vehicule <small>(Description)</small></label>
                            <textarea name="safety" id="safety" placeholder="Airbag" ></textarea>
                        </div>

                        <div class="singleField">
                            <label for="Technology">les Technologies du vehicule <small>(Description)</small></label>
                            <textarea name="technology" id="Technology" placeholder="Toit ouvrant" ></textarea>
                        </div>
                            
                    </div>

                    <div>
                    
                        <div class="singleField">
                            <label for="builtDate">Date de sortie</label>
                            <input type="date" name="builtDate" id="builtDate" placeholder="e.g: 2019" required>
                        </div>
    
                        <div class="singleField">
                            <label for="seats">Siéges(s)</label>
                            <input type="number" name="seats" id="seats" placeholder=".g: 3" required>
                        </div>

                        <div class="singleField">
                            <label for="year">Année</label>
                            <input type="number" name="year" id="year" placeholder=".g: 2012" required>
                        </div>
                        <div class="singleField">
                            <label for="finalDrive">Transmission finale</label>
                            <input type="text" name="finalDrive" id="finalDrive" placeholder="e.g: Transmission finale" required>
                        </div>
                        
                        <div class="singleField">
                            <label for="grade">Niveau de model</label>
                            <input type="text" name="grade" id="grade" placeholder="e.g: GX Hybrid" required>
                        </div>

                        <div class="singleField">
                        

                            <label for="staffID">Staff concerné</label>
                            <select name="staffID"  id="staffID" required>
                                <?php 
                                    $sql = "SELECT * FROM staff where status ='verified'";
                                    $res = mysqli_query($conn, $sql);
                                    if($res == TRUE){
                                        $count =  mysqli_num_rows($res);

                                        if($count > 0){
                                            while($row = mysqli_fetch_assoc($res)){
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
    

                    </div>

                    <div>

                        <div class="singleField">
                            <label for="spec">Zone de spécifications</label>
                            <input type="text" name="spec" id="spec" placeholder="e.g: GCC" required>
                        </div>
                    
                        <div class="singleField">
                            <label for="insurance">Assurance</label>
                            <select name="insurance" id="insurance">
                                <option value="2">2ans</option>
                                <option value="4">4</option>  
                                <option value="6">6</option>  
                                <option value="8">8</option>  
                                <option value="1">1</option>  
                            </select>
                        </div>

                        <div class="singleField">
                            <label for="company">Marque</label>
                            <select name="company" id="company">
                                <option value="Toyota">Toyota</option>
                                <option value="Tesla">Tesla</option>  
                                <option value="Mercedes">Mercedes</option>  
                                <option value="Wolkswagon">Wolkswagon</option>  
                            </select>
                        </div>

                        
                        <div class="singleField">
                            <label for="note">Note <small>(si y'en a)</small></label>
                            <textarea name="note" id="note" placeholder="Type note" ></textarea>
                        </div>

                        <div class="singleField">
                            <label for="status">Status</label>
                            <select name="status" id="status">
                                <option value="On Market" selected>Disponible</option>
                                <option value="sold">Vendu</option>  

                            </select>
                        </div>

                       
                    </div>
                  </div>

                        <h3 class="formTitle">Images du vehicule</h3>
                        <div method="POST" class="flex formContainer" enctype="multipart/form-data" id="galleryForm">
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Image 1 (Interieur)</label>
                                    <input type="file" name="Interior1" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Image 2 (Interieur)</label>
                                    <input type="file" name="Exterior1" id="carImage" >
                                </div>
                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Image 3 (Interieur)</label>
                                    <input type="file" name="Interior2" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Image 4 (Interieur)</label>
                                    <input type="file" name="Exterior2" id="carImage" >
                                </div>
                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Image 5 (Exterieur)</label>
                                    <input type="file" name="Interior3" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Image 6 (Exterieur)</label>
                                    <input type="file" name="Exterior3" id="carImage" >
                                </div>

                            </div>
                            <div>
                                <div class="singleField">
                                    <label for="carImage">Image 7 (Exterieur)</label>
                                    <input type="file" name="Interior4" id="carImage" >
                                </div>

                                <div class="singleField">
                                    <label for="carImage">Image 8 (Exterieur)</label>
                                    <input type="file" name="Exterior4" id="carImage" >
                                </div>

                                <a href="#galleryForm">
                                    <button  class="btn flex bg" style="width: 100%;" name='submit'>
                                        <i class="uil uil-plus icon"></i>
                                        Ajouter
                                    </button>
                                </a>
                            </div>
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

  $carName = $_POST['carName'];
  $carPrice = $_POST['carPrice'];
  $carLocation = $_POST['carLocation'];
  $priceIncs = $_POST['priceIncs'];
  $body = $_POST['body'];
  $fuel = $_POST['fuel'];
  $engine = $_POST['engine'];
  $bodyStyle = $_POST['bodyStyle'];
  $performance = $_POST['performance'];
  $safety = $_POST['safety'];
  $technology = $_POST['technology'];
  $builtDate = $_POST['builtDate'];
  $seats = $_POST['seats'];
  $year = $_POST['year'];
  $finalDrive = $_POST['finalDrive'];
  $grade = $_POST['grade'];
  $spec = $_POST['spec'];
  $insurance = $_POST['insurance'];
  $note = $_POST['note'];
  $staffID = $_POST['staffID'];
  $status = $_POST['status'];
  $company = $_POST['company'];

    
     
   if(isset($_FILES['carImage']['name'])){
    
    $image = $_FILES['carImage']['name'];
    
    $imageSource = $_FILES['carImage']['tmp_name'];
    
    $imageDestination = "../Assets/dbImages".$image; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $image ="";
    }

       
     
   if(isset($_FILES['Interior1']['name'])){
   
    $InteriorImage1 = $_FILES['Interior1']['name'];
    
    $imageSource = $_FILES['Interior1']['tmp_name'];
   
    $imageDestination = "../Assets/dbImages".$InteriorImage1; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage1 ="";
    }



     
   if(isset($_FILES['Interior2']['name'])){
   
    $InteriorImage2 = $_FILES['Interior2']['name'];
 
    $imageSource = $_FILES['Interior2']['tmp_name'];
   
    $imageDestination = "../Assets/dbImages".$InteriorImage2; 
   
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage2 ="";
    }



    
     
   if(isset($_FILES['Interior3']['name'])){
    
    $InteriorImage3 = $_FILES['Interior3']['name'];

    $imageSource = $_FILES['Interior3']['tmp_name'];
    
    $imageDestination = "../Assets/dbImages".$InteriorImage3; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage3 ="";
    }



    
     
   if(isset($_FILES['Interior4']['name'])){
    
    $InteriorImage4 = $_FILES['Interior4']['name'];
    
    $imageSource = $_FILES['Interior4']['tmp_name'];
   
    $imageDestination = "../Assets/dbImages".$InteriorImage4; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $InteriorImage4 ="";
    }



    
     
   if(isset($_FILES['Exterior1']['name'])){
   
    $ExteriorImage1 = $_FILES['Exterior1']['name'];
 
    $imageSource = $_FILES['Exterior1']['tmp_name'];
    
    $imageDestination = "../Assets/dbImages".$ExteriorImage1; 
   
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage1 ="";
    }



    
     
   if(isset($_FILES['Exterior2']['name'])){
   
    $ExteriorImage2 = $_FILES['Exterior2']['name'];
    
    $imageSource = $_FILES['Exterior2']['tmp_name'];
    
    $imageDestination = "../Assets/dbImages".$ExteriorImage2; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage2 ="";
    }



   
     
   if(isset($_FILES['Exterior3']['name'])){
  
    $ExteriorImage3 = $_FILES['Exterior3']['name'];
    
    $imageSource = $_FILES['Exterior3']['tmp_name'];
  
    $imageDestination = "../Assets/dbImages".$ExteriorImage3; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage3 ="";
    }

    
     
   if(isset($_FILES['Exterior4']['name'])){
    
    $ExteriorImage4 = $_FILES['Exterior4']['name'];
    
    $imageSource = $_FILES['Exterior4']['tmp_name'];
    
    $imageDestination = "../Assets/dbImages".$ExteriorImage4; 
    
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
    }
  }else{
    
    $ExteriorImage4 ="";
    }


  $sql = "INSERT INTO cars SET
  carname = '$carName',
  price = '$carPrice',
  location = '$carLocation',
  mainimage = '$image',
  priceinclusives = '$priceIncs',
  body = '$body',
  fuel = '$fuel',
  engine = '$engine',
  bodystyle = '$bodyStyle',
  performance = '$performance',
  safety = '$safety',
  technology = '$technology',
  releasedate = '$builtDate',
  seats = '$seats',
  modelyear = '$year',
  finaldrive = '$finalDrive',
  modelgrade = '$grade',
  specregion = '$spec',
  insurance = '$insurance',
  note = '$note',
  company = '$company',
  staffID = '$staffID',
  status = '$status',
  Interior1 = '$InteriorImage1',
  Interior2 = '$InteriorImage2',
  Interior3 = '$InteriorImage3',
  Interior4 = '$InteriorImage4',
  Exterior1	 = '$ExteriorImage1',
  Exterior2 = '$ExteriorImage2',
  Exterior3 = '$ExteriorImage3',
  Exterior4 = '$ExteriorImage4'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedCar'] = '<span class="success">Vehicule ajouté avec succés, ajouter encore?</span>';
      header('location:'.SITEURL. 'View/Backend/Admin/cars.php');
      exit(); 
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>


