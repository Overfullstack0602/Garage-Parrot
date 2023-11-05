<?php
include('./clientPartials/header.php');
ob_start();
?>

    <!-- header Starts -->
    <?php
      include('./clientPartials/navbar.php')
    ?>
    <!-- header Ends -->

    <!-- SignUp Page Starts -->
    <div class="signUp section">
        <div class="secContainer container">
            <div class="secTitleDiv">
                <h2 class="secTitle">Page d'inscription</h2>
                <P>
                Nous sommes heureux que vous rejoigniez notre équipe !
                </P>
            </div>
            
            <div class="formSection">

                <form method="POST" class="signUpForm grid">
                    <div class="singleField">
                        <label for="firstName">Prénom</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Votre prénom"  required>
                    </div>

                    <div class="singleField">
                        <label for="lastName">Nom</label>
                        <input type="lastName" id="lastName" name="secondName" placeholder="Votre nom"  required>
                    </div>

                    <div class="singleField">
                        <label for="nationality">Nationalité</label>
                        <input type="nationality" id="nationality" name="nationality" placeholder="Votre nationalité"  required>
                    </div>

                    <div class="singleField">
                        <label for="dob">Date de naissance</label>
                        <input type="date" id="dob" name="dob" placeholder="Date de naissance"  required>
                    </div>

                    <div class="singleField">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"  required>
                    </div>

                    <div class="singleField">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" placeholder="Votre nom d'utilisateur"  required>
                    </div>

                    <div class="singleField">
                        <label for="username">Image</label>
                        <input type="file" id="username" name="image" placeholder="Image"  required>
                    </div>


                    <div class="singleField">
                        <label for="password">Créer votre mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Votre mot de passe"  required>
                    </div>



                    <button class="bg btn flex primaryBtn" name="submit">inscription <i class='bx bx-right-arrow-alt icon'></i></button>
               
                </form>

                <span class="registerLink">
                    <p>Vous etes déja membre? <a href="login.php">Connexion</a></p>
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

  $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  $secondName = mysqli_real_escape_string($conn, $_POST['secondName']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
  $dob = mysqli_real_escape_string($conn, $_POST['dob']);
  
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  

  $sql = $conn->prepare("INSERT INTO clients (firstname, secondname, email, nationality, username, dob, password) VALUES (?, ?, ?, ?, ?, ?, ?)");

  $sql->bind_param("sssssss", $firstName, $secondName, $email, $nationality, $username, $dob, $password);

  if ($sql->execute()) {
    $_SESSION['addedClient'] = '<span class="success">Vous vous êtes bien inscrit!</span>';
    header('location:'.SITEURL. 'View/Frontend/login.php');
    exit();
  } else {
    die('Failed to connect to database!');
  }

  $sql->close();
}
?>
