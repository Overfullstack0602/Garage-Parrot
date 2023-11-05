<center><div class='footer'>
        <div class="footerContainer container">
            <div class="footerMenuDiv grid"><button class="btn primaryBtn" name="submit"><h1>Nos horaires</h1></button>
            <div class="sectionImage flex">
                <img src="../../Assets/car (3).png" alt="Car Image">
            </div>
<div class="singleGrid">   
            <span class="footerTitle">
                <?php
                $jours_semaine = [
                    "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"
                ];
                $sql = "SELECT * FROM horaires_garage";
                $result = mysqli_query($conn, $sql);?>

                <?php if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){?> 
                        
                        <td class="jour_semaine trText"><h2><?php $jour_semaine = $row['jour_semaine'];?></h2></td>
                        <td class="heure_ouverture trText"><h2><?php $heure_ouverture = date('H:i', strtotime($row['heure_ouverture']));?></h2></td>
                        <td class="heure_fermeture trText"><h2><?php $heure_fermeture = date('H:i', strtotime($row['heure_fermeture']));?></h2></td>

                        
                        <?php if ($jour_semaine >= 1 && $jour_semaine <= 7) {
                            echo "<p>{$jours_semaine[$jour_semaine-1]} : De {$heure_ouverture} à {$heure_fermeture}</p>"; } ?>
                        <?php
                    }
                } else {
                    echo "Erreur lors de la récupération des horaires.";
                }
                ?>
                
            </span></div></div></div></di>
            
            </center><!-- Footer Starts -->
    <div class='footer'>
        <div class="footerContainer container">
            <div class="footerMenuDiv grid">
           
                
                
                
    

            <div class="singleGrid">
                <span class="footerTitle">
                <ul><li><a href="<?php echo SITEURL?>View/Frontend/CG.php"><button class="btn primaryBtn" name="submit">Conditions Générales d'Utilisation (CGU)</button></a></li></ul> 
                </span>
                
                
                </div>

                <div class="singleGrid">
                <span class="footerTitle">
                <ul><li><a href="<?php echo SITEURL?>View/Frontend/Politique de Confidentialité.php"><button class="btn primaryBtn" name="submit">Politique de Confidentialité</button></a></li></ul> 
                </span>
                
                
                </div>

                <div class="singleGrid">
                <span class="footerTitle">
                <ul><li><a href="<?php echo SITEURL?>View/Frontend/mentionslegales.php"><button class="btn primaryBtn" name="submit">Mentions Légales</button></a></li></ul> 
                </span>
                
                
                </div>
                   

                

                <div class="singleGrid">
                <span class="footerTitle">
                <ul><li><a href="<?php echo SITEURL?>View/Frontend/Politique de Cookies.php"><button class="btn primaryBtn" name="submit">Politique de Cookies</button></a></li></ul> 
                </span>
                
                
                </div>
    

                
    

               
                
                
                
                
                

                
                
                

                

                

            </div>
            <div class="lowerDiv grid">
                <p>2023 Tout les droits sont réservés</p>
               
            </div>
        </div>
        </div>
    <!-- Footer Ends -->
    
    <!-- Link Javascript file -->
    <script src="../Frontend/frontend.js"></script>
</body>
</html>