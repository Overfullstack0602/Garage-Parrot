<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
include('./clientPartials/header.php')
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->


    <!--Catalogue Section Starts  -->
    <div class="carCatalogue section">
        <div class="secContainer container">
           <div class="secHeader">
                <div class="secTitleDiv">
                    <h2 class="secTitle">Notre collection</h2>
                    <P>
                   Trouvez votre voitures de réve!
                    </P>
                </div>
                 
                </div>
            <div class="col-md-3">                                
            <div class="list-group">
                <h3>Prix</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">10000€ - 100000€</p>
                <div id="price_range"></div>
            </div>                
        </div>
        <div class='col-md-3'>
        <div class="row filter_data">
        </div></div>

                <div class="carsContainer">
                    <div class="singleCompany grid">
                        <?php 
                            $sql = "SELECT * FROM cars where status = 'On Market'";
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
                                    ?>
                                    <!-- Single car card -->
                                    <div class="singleCar" id="car_<?php echo $id; ?>">

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
                                    <span>Pas de véhicules trouvé!</span>
                                    <?php
                                
                                }
                            }
                        ?>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!--Catalogue Section Ends  -->
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
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:'fetch_data', minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.singleCompany.grid').html(data);
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
<?php
include('./clientPartials/footer.php')
?>