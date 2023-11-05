
<?php
include('./clientPartials/header.php')
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->


    <div class="homeSection" id="Home">
        <div class="homeContainer grid">
           <div class="homeText">
            

            <h1 class="title">
                Vincent Parrot Auto : <span>Experts en</span> Réparations <span>Automobiles!</span>
            </h1>
            <p>
                Confiez votre voiture entre les mains expertes de Vincent Parrot Auto. Des réparations de qualité, rapides et fiables pour vous remettre sur la route en toute confiance.
            </p>
        </div>
        <div class="homeImage flex">
            <img src="../../Assets/main.jpg" alt="carDetails.php">
        </div>
    </div>
</div>


    <!-- Home Section Ends -->

    <!-- How it Works Starts  -->
    <div class="guideSection section" id="guide">
        <div class="secContainer container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Comment ca marche!</h2>
                
            </div>

            <div class="contentDiv grid">
                 <div class="singleDiv">
                    <div class="iconDiv purpleBg">
                        <img src="../../Assets/car.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                            Choisisez votre voiture de reve
                        </span>
                        <p>
                        Trouvez les meilleurs offres.
                        </p>
                    </div>

                 </div>


                 <div class="singleDiv">
                    <div class="iconDiv orangeBg">
                        <img src="../../Assets/automobile.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                            Faites vos réparation chez nous
                        </span>
                        <p>
                        les meilleurs services de réparation.
                        </p>
                    </div>

                 </div>

                 <div class="singleDiv">
                    <div class="iconDiv maroonBg">
                        <img src="../../Assets/agent.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                        Contactez un agent
                        </span>
                        <p>
                        Besoin d'aide ? Contactez nos agents.
                        </p>
                    </div>

                 </div>
            </div>
        </div>
    </div>
    <!-- How it Works Ends  -->
    




    <!-- Popular Cars Starts -->
     <div class="popularCars section" id="popular">
        <div class="secContainer container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Populaire</h2>
                
            

            <div class="contentDiv">
              <div class="filterBtns grid">

              <div class="singleFilter flex" data-filter="Toyota">
                      <img src="../../Assets/logo (1).png" alt="Company Logo" class="img">
                      <span class="companyName">
                          Toyota
                      </span>
                    </div>
                    <div class="singleFilter flex active" data-filter="Wolkswagen">
                      <img src="../../Assets/logo (3).png" alt="Company Logo" class="img">
                      <span class="companyName">
                          Wolkswagen
                      </span>
                    </div>
                    <div class="singleFilter flex" data-filter="Tesla">
                      <img src="../../Assets/logo (7).png" alt="Company Logo" class="img">
                      <span class="companyName">
                          Tesla
                      </span>
                    </div>
                    <div class="singleFilter flex" data-filter="Mercedes">
                      <img src="../../Assets/logo (6).png" alt="Company Logo" class="img">
                      <span class="companyName">
                          Mercedes
                      </span>
                    </div>
              </div>

              <div class="carsContainer">
                <div class="singleCompany grid hide" data-target="Toyota">

                    <?php 
                        $sql = "SELECT * FROM cars where status = 'On Market' AND company = 'Toyota' order by rand() limit 0,3";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count =  mysqli_num_rows($res);

                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = htmlspecialchars($row['id']);
                                    $carname = htmlspecialchars($row['carname']);
                                    $price = htmlspecialchars($row['price']);
                                $location = htmlspecialchars($row['location']);
                                $priceinclusives = htmlspecialchars($row['priceinclusives']);
                                $body = htmlspecialchars($row['body']);
                                $fuel = htmlspecialchars($row['fuel']);
                                $engine = htmlspecialchars($row['engine']);
                                $bodystyle = htmlspecialchars($row['bodystyle']);
                                $performance = htmlspecialchars($row['performance']);
                                $safety = htmlspecialchars($row['safety']);
                                $technology = htmlspecialchars($row['technology']);
                                $releasedate = htmlspecialchars($row['releasedate']);
                                $seats =htmlspecialchars( $row['seats']);
                                $modelyear = htmlspecialchars($row['modelyear']);
                                $finaldrive = htmlspecialchars($row['finaldrive']);
                                $modelgrade = htmlspecialchars($row['modelgrade']);
                                $specregion = htmlspecialchars($row['specregion']);
                                $insurance = htmlspecialchars($row['insurance']);
                                $note = htmlspecialchars($row['note']);  
                                $mainimage = htmlspecialchars($row['mainimage']);
                                $status = htmlspecialchars($row['status']);
                                

                                ?>
                                    <!-- Single car card -->
                                    <div class="singleCar">
                                        <?php 
                                            if($mainimage!=""){   
                                                ?>
                                                <div class="imgDiv">
                                                <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                                </div>
                                                <?php
                                            }
                                            else{
                                                echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                                            }
                                        ?>
                                        
                                        <h5 class="carTitle">
                                        <?php echo $carname;?>
                                        </h5>

                                        <div class="properties grid">
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-group icon'></i>
                                                <span class="text">
                                                <?php echo $seats;?> Siéges
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class="uis uis-anchor icon"></i>
                                                <span class="text">
                                                    Autopilote
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-calendar-event icon' ></i>
                                                <span class="text">
                                                <?php echo $modelyear;?>
                                                </span>
                                            </div>
                                            <div class="singleProperty flex">
                                                <i class='bx bxs-gas-pump icon' ></i>
                                                <span class="text">
                                                <?php echo $fuel;?>
                                                </span>
                                            </div>
                                        </div>

                            
                                        <div class="price_seller flex">
                                        <span class="price">
                                            $<?php echo $price;?>
                                        </span>
                                        <a href="<?php echo SITEURL?>View/Frontend/carDetails.php?id=<?php echo $id?>">
                                            <span class="btn primaryBtn">
                                            Details
                                            </span>
                                        </a>
                                        </div>
                                    </div>
                                <?php

                                }
                            }

                            else{

                                ?>
                                <span>Pas de voitures trouvées!</span>
                                <?php
                              
                            }
                        }
                    ?>
                </div>

                <div class="singleCompany grid hide" data-target="Mercedes">

                    <?php 
                        $sql = "SELECT * FROM cars where status = 'On Market' AND company = 'Mercedes' order by rand() limit 0,3";
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
                                <!-- Single car card -->
                                <div class="singleCar">
                                <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="imgDiv">
                                             <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                            </div>
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                                        }
                                    ?>
                                    
                                    <h5 class="carTitle">
                                    <?php echo $carname;?>
                                    </h5>

                                    <div class="properties grid">
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-group icon'></i>
                                            <span class="text">
                                            <?php echo $seats;?> Siéges
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class="uis uis-anchor icon"></i>
                                            <span class="text">
                                                Autopilote
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-calendar-event icon' ></i>
                                            <span class="text">
                                            <?php echo $modelyear;?>
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-gas-pump icon' ></i>
                                            <span class="text">
                                            <?php echo $fuel;?>
                                            </span>
                                        </div>
                                    </div>

                        
                                    <div class="price_seller flex">
                                    <span class="price">
                                        $<?php echo $price;?>
                                    </span>
                                    <a href="<?php echo SITEURL?>View/Frontend/carDetails.php?id=<?php echo $id?>">
                                        <span class="btn primaryBtn">
                                        Details
                                        </span>
                                    </a>
                                    </div>
                                </div>
                                <?php

                                }
                            }

                            else{

                                ?>
                                <span>Pas de voitures trouvées!</span>
                                <?php
                              
                            }
                        }
                    ?>
                </div>

                <div class="singleCompany grid live" data-target="Wolkswagen">
                    <?php 
                        $sql = "SELECT * FROM cars where status = 'On Market' AND company = 'wolkswagen' order by rand() limit 0,3";
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
                                <!-- Single car card -->
                                <div class="singleCar">
                                <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="imgDiv">
                                             <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                            </div>
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                                        }
                                    ?>
                                    
                                    <h5 class="carTitle">
                                    <?php echo $carname;?>
                                    </h5>

                                    <div class="properties grid">
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-group icon'></i>
                                            <span class="text">
                                            <?php echo $seats;?> Siéges
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class="uis uis-anchor icon"></i>
                                            <span class="text">
                                                Autopilote
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-calendar-event icon' ></i>
                                            <span class="text">
                                            <?php echo $modelyear;?>
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-gas-pump icon' ></i>
                                            <span class="text">
                                            <?php echo $fuel;?>
                                            </span>
                                        </div>
                                    </div>

                        
                                    <div class="price_seller flex">
                                    <span class="price">
                                        $<?php echo $price;?>
                                    </span>
                                    <a href="<?php echo SITEURL?>View/Frontend/carDetails.php?id=<?php echo $id?>">
                                        <span class="btn primaryBtn">
                                        Details
                                        </span>
                                    </a>
                                    </div>
                                </div>
                                <?php

                                }
                            }

                            else{

                                ?>
                                <span>Pas de voitures trouvées!</span>
                                <?php
                              
                            }
                        }
                    ?>
                </div>

                <div class="singleCompany grid hide" data-target="Tesla">
                    <?php 
                        $sql = "SELECT * FROM cars where status = 'On Market' AND company = 'Tesla' order by rand() limit 0,3";
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
                                <!-- Single car card -->
                                <div class="singleCar">
                                <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="imgDiv">
                                             <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                            </div>
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image </span>';
                                        }
                                    ?>
                                    
                                    <h5 class="carTitle">
                                    <?php echo $carname;?>
                                    </h5>

                                    <div class="properties grid">
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-group icon'></i>
                                            <span class="text">
                                            <?php echo $seats;?> Siéges
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class="uis uis-anchor icon"></i>
                                            <span class="text">
                                                Autopilote
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-calendar-event icon' ></i>
                                            <span class="text">
                                            <?php echo $modelyear;?>
                                            </span>
                                        </div>
                                        <div class="singleProperty flex">
                                            <i class='bx bxs-gas-pump icon' ></i>
                                            <span class="text">
                                            <?php echo $fuel;?>
                                            </span>
                                        </div>
                                    </div>

                        
                                    <div class="price_seller flex">
                                    <span class="price">
                                        $<?php echo $price;?>
                                    </span>
                                    <a href="<?php echo SITEURL?>View/Frontend/carDetails.php?id=<?php echo $id?>">
                                        <span class="btn primaryBtn">
                                        Details
                                        </span>
                                    </a>
                                    </div>
                                </div>
                                <?php

                                }
                            }

                            else{

                                ?>
                                <span>Pas de voitures trouvées!</span>
                                <?php
                              
                            }
                        }
                    ?>
                </div>
              </div>
            </div>
           

            
        </div>
     </div>
     
 

    </div>

    <!-- Popular Cars Ends -->

    <!-- Why Choose Us Starts -->
    
    <!-- Why Choose Us Ends -->

    <!-- Subscription Section Starts -->
    <div class="subscription">
        <div class="secContent flex container">
            <div class="textDiv">
                <h1 class="bigText">
                  Inscrivez vous pour les derniéres nouveautés
                </h1>
                
                <form method="POST" class="form flex">
                    <input type="email" name="email" placeholder="Enter your email address">
                    <button class="btn primaryBtn" name="submit">Inscrivez vous</button>
                </form>
            </div>
            <div class="sectionImage flex">
                <img src="../../Assets/car (9).png" alt="Car Image">
            </div>
        </div>
    </div>
    <!-- Subscription Section Ends -->

                                               

    <!--Review Section Section Starts-->
    <div class='review section container' id="reviews">
        <div class="secContainer">
            <div class="secTitleDiv">
                <h2 class="secTitle">Meilleurs avis de nos clients</h2>
                
            </div>

            <div class="reviewContainer grid">
                

                <?php 
                    $sql = "SELECT * FROM reviews where status = 'Published' order by rand() limit 0,3";
                    $res = mysqli_query($conn, $sql);
                    if($res == TRUE){
                        $count =  mysqli_num_rows($res);

                        if($count > 0){
                            
                            while($row = mysqli_fetch_assoc($res)){
                            $id = $row['id'];
                             $carID = $row['carID'];
                            $reviewerName = $row['reviewerName'];
                            $reviewerImage = $row['reviewerImage'];
                            $nationality	 = $row['nationality'];
                            $review	 = $row['review'];
                            $status	 = $row['status'];

                            ?>
                                <div class="singleReview grid">

                                    <?php 
                                        $sql2 = "SELECT * FROM cars where id = $carID";
                                        $res2 = mysqli_query($conn, $sql2);
                                        if($res == TRUE){
                                            $count =  mysqli_num_rows($res2);

                                            if($count > 0){
                                                while($row = mysqli_fetch_assoc($res2)){
                                                $id = $row['id'];
                                                $carname = $row['carname'];
                                                $mainimage = $row['mainimage'];
                                                }
                                            }
                                        }
                                    ?>

                                    <?php 
                                        if($mainimage!=""){   
                                            ?>
                                            <div class="ImgDiv">
                                                <img src="<?php echo SITEURL;?>Assets/<?php echo $mainimage;?>" alt="Car Image">
                                            </div>
                                            <?php
                                        }
                                        else{
                                            echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                        }
                                    ?>

                                    <div class="reviewDetails">
                                        <h5 class="reviewTitle">
                                        <?php echo $carname;?>
                                        </h5>
                                        <span class="desc">
                                        <?php echo $review;?>
                                        </span>
                            
                                        <div class="reviewerDiv flex">
                                        <div class="leftDiv flex">

                                            <?php 
                                                if($reviewerImage!=""){   
                                                    ?>
                                                        <div class="reviewerImg">
                                                            <img src="<?php echo SITEURL;?>Assets/<?php echo $reviewerImage;?>" alt="">
                                                        </div>
                                                        
                                                    <?php
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image</span>';
                                                }
                                            ?>
                                            <div class="aboutReviewer">
                                            <span class="name">
                                            <?php echo $reviewerName;?>
                                            </span>
                                            </div>
                                        </div>
                                        <div class="rightDiv flex">
                                            <i class="uis uis-star icon"></i>
                                            <blockquote>4.84</blockquote>
                                        </div>
                                        </div>
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
    <!--Review Section Section Ends-->
<?php
include('./clientPartials/footer.php')
?>

<?php 
if(isset($_POST['submit'])){

  $email = $_POST['email'];
  
  $sql = "INSERT INTO subscribers SET
    email = '$email',
    date = '$date'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['addedSub'] = '<span class="success">Subscriber Added Successfuly!</span>';
      header('location:'.SITEURL. 'View/Frontend/Index.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 
  exit();

}
?>
<script>
  $(document).ready(function(){
    $('#price_range').slider({
        range:true,
        min:0,
        max:65000,
        values:[0, 10000],
        step:1000,
        slide:function(event, ui)
        {
            $('#price_show').html(ui.values[0]+'€ - '+ui.values[1]+'€');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
        }
    });

    filter_data();

    function filter_data()
    {
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url:"filter_cars.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    $('#price_range').slider({
        range:true,
        min:0,
        max:65000,
        values:[0, 10000],
        step:1000,
        slide:function(event, ui)
        {
            $('#price_show').html(ui.values[0]+'€ - '+ui.values[1]+'€');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});




</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
