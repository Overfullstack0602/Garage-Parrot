<?php 
include('./adminPartials/adminHeader.php');
?>


<div class="adminDasboard flex">

<?php 
 include('./adminPartials/sideMenu.php');
?>
<div class="body">
            <div class="top flex">
                <h1 class="titleText">
                    Administrateur tableau de bord
                </h1>

                    <?php 
                        if(isset($_SESSION['loginMessage'])){
                            echo $_SESSION['loginMessage'];
                            unset($_SESSION['loginMessage']);
                        }
                    ?> 
                <p>Bienvenue, Staff!</p>
            </div>
            
            <div class="summaryDiv flex">
                <div>
                    <h1></h1>
                    <p>Horaires</p>
                    
                    <h1 class="overlay"></h1>
                </div>
                    </div>
<?php
if(isset($_POST['submit'])){
    $jours = $_POST['jour'];
    $heure_ouverture = $_POST['heure_ouverture'];
    $heure_fermeture = $_POST['heure_fermeture'];
    
    for($i = 0; $i < count($jours); $i++) {
        $jour = $jours[$i];
        $ouverture = $heure_ouverture[$i];
        $fermeture = $heure_fermeture[$i];
        
        $sql = "UPDATE horaires_garage 
                SET heure_ouverture = '$ouverture', heure_fermeture = '$fermeture'
                WHERE jour_semaine = $jour";
        $result = mysqli_query($conn, $sql);
        
        if(!$result) {
            echo "Erreur lors de la mise à jour des horaires pour le jour $jour";
        }
    }
}

$sql = "SELECT * FROM horaires_garage";
$result = mysqli_query($conn, $sql);
?>

<div class="allProperties">
    <h2>Modifier les horaires d'ouverture du garage</h2>
    <form method="post">
        <table >
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Heure d'ouverture</th>
                    <th>Heure de fermeture</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $jours_semaine = [
                    "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"
                ];
                
                 while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td class="jour_semaine trText"><?php echo $jours_semaine[$row['jour_semaine']-1]; ?></td>
                        <td class="heure_ouverture trText">
                            <input class="time-input" type="time" name="heure_ouverture[]" value="<?php echo $row['heure_ouverture']; ?>" required>
                        </td>
                        <td class="heure_fermeture trText">
                            <input class="time-input" type="time" name="heure_fermeture[]" value="<?php echo $row['heure_fermeture']; ?>" required>
                        </td>
                        <input type="hidden" name="jour[]" value="<?php echo $row['jour_semaine']; ?>">
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <button type='submit' name='submit' class="btn bg flex">
                <i class="uil uil-sign-out-alt icon"></i>Enregistrer</button>
    </form>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var timeInputs = document.querySelectorAll('.time-input');

        timeInputs.forEach(function(input) {
            input.addEventListener('blur', function() {
                var value = this.value.trim();
                if (value !== '') {
                    var parts = value.split(':');
                    if (parts.length === 2 && 
                        /^\d{2}$/.test(parts[0]) &&
                        /^\d{2}$/.test(parts[1]) &&
                        parseInt(parts[0]) >= 0 && parseInt(parts[0]) <= 23 &&
                        parseInt(parts[1]) >= 0 && parseInt(parts[1]) <= 59) {
                        // Format d'heure valide
                        this.value = parts[0] + ':' + parts[1];
                    } else {
                        // Format d'heure invalide, réinitialiser le champ
                        this.value = '';
                        alert("Veuillez entrer une heure valide au format HH:mm");
                    }
                }
            });
        });
    });
</script>


<?php 
include('./adminPartials/adminFooter.php');
?>

 
