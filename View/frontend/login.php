<?php
include('./clientPartials/header.php');
ob_start();
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->

    <!-- login Page Starts -->
    <div class="loginPage section">
        <div class="secContainer container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Connexion client</h2>
                <P>
                Re-bienvenue, veuillez vous connecter pour continuer !
                </P>

                    <?php 
                        if(isset($_SESSION['noClient'])){
                            echo $_SESSION['noClient'];
                            unset($_SESSION['noClient']);
                        }

                        if(isset($_SESSION['notLoggedIn'])){
                            echo $_SESSION['notLoggedIn'];
                            unset ($_SESSION['notLoggedIn']);
                        }
            
                        if(isset($_SESSION['settings'])){
                        echo $_SESSION['settings'];
                        unset($_SESSION['settings']);
                        }

                        if(isset($_SESSION['credentialsChanged'])){
                        echo $_SESSION['credentialsChanged'];
                        unset($_SESSION['credentialsChanged']);
                        }
                    ?> 
            </div>
      
            <div class="formSection">

                <form method="POST" class="loginForm grid">
                    <div class="singleField">
                        <label for="userName">Nom d'utilisateur</label>
                        <input type="text" id="userName" name="userName" placeholder="Nom d'utilisateur"  required>
                    </div>

                    <div class="singleField">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="loginEmail" placeholder="Email"  required>
                    </div>

                    <div class="singleField">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe"   required>
                    </div>

                
                    <button class="btn flex primaryBtn" name="submit">Connexion <i class='bx bx-right-arrow-alt icon'></i></button>

                    <!-- <a href="../Backend/Admin/admin.php">
                    <button class="btn flex primaryBtn">Login <i class='bx bx-right-arrow-alt icon'></i></button>
                    </a> -->
                
                </form>

                <span class="registerLink">
                    <p>Vous etes pas inscrit? <a href="signUp.php">Inscription</a></p>
                </span>
            </div>
        </div>
    </div>
    <!-- login Page Ends -->

<?php
include('./clientPartials/footer.php')
?>


<?php 

if(isset($_POST['submit'])){

    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $loginEmail = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $loginPassword = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM clients WHERE username='$userName' AND email='$loginEmail' AND password= '$loginPassword'";

    $res = mysqli_query($conn,$sql);
 
       echo $count = mysqli_num_rows($res);
        $row = mysqli_fetch_assoc($res);
        if($count==1){
            $_SESSION['loginMessage'] = '<span class="success">Bienvenue ' .$firstName. '!</span>';
            $_SESSION['username'] = $userName;
            header('location:' .SITEURL. 'View/Backend/Admin/clientAllCarsPage.php');
            exit();
            
        }

        else{
            $_SESSION['noClient'] = '<span class="fail" style="color: red;">Informations incorrectes!</span>';
            header('location:' .SITEURL. 'View/frontend/login.php');
            exit();
        }
    
}


?>
    