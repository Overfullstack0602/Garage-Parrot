<?php
include('./clientPartials/header.php')
?>

  <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
  <!-- header Ends -->

  <!-- Staff Details Starts -->
    <div class="staffDetails section">
        <div class="secContanier container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Staff Profile </h2>
                <P>
                Découvrez notre équipe d'aujourd'hui qui vous accompagnera tout au long de la réparation de votre voiture.
                </P>
            </div>
            <?php 
                 $selectedStaffID = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';
                 if ($selectedStaffID != '') {
                    $sql = "SELECT * FROM staff where id ='$selectedStaffID'";
                    $res = mysqli_query($conn, $sql);
                
                    if ($res && mysqli_num_rows($res) > 0) {
                        
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
                        $description = $row['description'];
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
                        $status = $row['status'];
                        }
                    }
                }
            ?>
            <div class="inforSection flex">
                <div class="leftDiv">
                    <div class="topLeftDiv grid">

                      <?php 
                          if($profilepic!=""){   
                              ?>
                                  <div class="imgDiv">
                                  <img src="<?php echo SITEURL;?>Assets/<?php echo $profilepic;?>" alt="Staff Image">
                                  </div>
                              <?php
                          }
                          else{
                              echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                          }
                      ?>

                      <div class="staffBio">
                          <h4 class="name"><?php echo $firstname;?> <?php echo $secondname;?>  </h4>
                          <span class="flex badge"><i class="uil uil-check-circle icon"></i> Verifié
                          </span>

                          
                          <div class="nationality">
                              Nantionalité: <span><?php echo $nationality;?></span>
                          </div>

                          <div class="lang">
                              Langues: <span><?php echo $language;?></span>
                          </div>

                          <div class="time">
                              Temps de réponse: <span><?php echo $response;?> Minutes</span>
                          </div>
                          
                      </div>

                      <div class="personalInfor">
                          <h4>Informations personelles</h4>
                          <div class="ID">
                              ID: <span>#<?php echo $id;?></span>
                          </div>
                          <div class="exp">
                              Experience: <span>Since <?php echo $experience;?></span>
                          </div>
                      </div>

                    </div>

                      <div class="bottomLeftDiv">
                        <h4 class="flex">Staff info <span></span></h4>
                        <p>
                        <?php echo $description;?>
                        <p>
                      </div>
                </div>

                <div class="rightDiv">
                    <div class="topRightDiv">
                        <h3>Contactez nous</h3>
                        <span class="phone flex">
                          <i class="uil uil-phone-alt icon"></i> <?php echo $phone;?>
                        </span>
                        <span class="email flex">
                          <a href="https://mailto:<?php echo $email ?>" target="blank" class="flex">
                              <i class="uil uil-envelope-alt icon"></i>Envoyez nous un email
                          </a>

                          

                        </span>

                        <div class="socials">
                        <a href="<?php echo SITEURL ?><?php echo $facebook ?>" target="blank"><i class="uil uil-facebook-messenger icon"></i></a>
                        <a href="<?php echo SITEURL ?><?php echo $twitter ?>" target="blank"><i class="uil uil-twitter icon"></i></a>

                        <a href="<?php echo SITEURL ?><?php echo $instagram ?>" target="blank"><i class="uil uil-instagram-alt icon"></i></a>

                        <a href="<?php echo SITEURL ?><?php echo $linkedin?>" target="blank"><i class="uil uil-linkedin icon"></i></a>
                        </div>
                      </div>

                    
                </div>
            </div>
        </div>
    </div>
  <!-- Staff Details Ends -->

<?php
include('./clientPartials/footer.php')
?>

