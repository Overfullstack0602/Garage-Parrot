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
              <span class="text">
              Du samedi au lundi:de 8h-16h.
              </span>

              <h1 class="title">
              Vincent Parrot Auto : <span>Experts en</span> Réparations <span>Automobiles!</span>
              </h1>
              <P>
              Confiez votre voiture entre les mains expertes de Vincent Parrot Auto. Des réparations de qualité, rapides et fiables pour vous remettre sur la route en toute confiance.
              </P>
           </div>
           <div class="homeImage flex">
               <img src="../../Assets/mechanicien.jpg" alt="carDetails.php">
           </div>
        </div>
    </div>



    <div class="guideSection section" id="guide">
        <div class="secContainer container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Nos services de réparation</h2>
                
            </div>

            <div class="contentDiv grid">
                 <div class="singleDiv">
                    <div class="iconDiv maroonBg">
                        <img src="../../Assets/automobile.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                            Réparation automobile.
                        </span>
                        
                    </div>

                 </div>

                  
                

                 <div class="singleDiv">
                    <div class="iconDiv orangeBg">
                        <img src="../../Assets/rampe.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                        Rampe pour voiture.
                        </span>
                        
                    </div>

                 </div>


                 <div class="singleDiv">
                    <div class="iconDiv purpleBg">
                        <img src="../../Assets/gaz.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                        Gaz d'échappement.
                        </span>
                        
                    </div>

                 </div>


                 <div class="singleDiv">
                    <div class="iconDiv purpleBg">
                        <img src="../../Assets/freins.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                            Réparation & changement des freins.
                        </span>
                        
                    </div>

                 </div>




                 <div class="singleDiv">
                    <div class="iconDiv orangeBg">
                        <img src="../../Assets/vidange.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                            Vidange.
                        </span>
                        
                    </div>

                 </div>


                 <div class="singleDiv">
                    <div class="iconDiv maroonBg">
                        <img src="../../Assets/gonfelage.png" alt="carDetails.php">
                    </div>

                    <div class="guideDesc">
                        <span class="guideTitle">
                            Service de Gonflage des Roues.
                        </span>
                        
                    </div>

                 </div>
            </div>
        </div>
    </div>
    
    <div class="reviewSection section">
       <div class="secContainer container">
        <div class="secTitleDiv">
            <h2 class="secTitle">Contactez nous pour obtenir votre devis</h2>
            <P>
                Faites votre demande maintenant.
            </P>
        </div>

        

        </div>
       </div>
    </div>
    <?php
$staffID = 8; 
?>

    <a href="<?php echo SITEURL?>View/Frontend/staffDetailsFront.php?id=<?php echo $staffID;?>" class="actionBtn flex">Discutez avec nous <i class='bx bxs-user-voice icon' ></i></a>
<?php
include('./clientPartials/footer.php')
?>