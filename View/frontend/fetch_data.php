
<?php
include('../Config/config.php');

if(isset($_POST["action"]))
{
    $query = $conn->prepare("SELECT * FROM cars WHERE status = 'On Market'");

    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $minimum_price = $_POST["minimum_price"];
        $maximum_price = $_POST["maximum_price"];
        $query = $conn->prepare("SELECT * FROM cars WHERE status = 'On Market' AND price BETWEEN ? AND ?");
        $query->bind_param("ii", $minimum_price, $maximum_price);
    }

    $query->execute();
    $result = $query->get_result();

    $output = '';
    while ($row = $result->fetch_assoc()) {
        $id = htmlspecialchars($row['id']);
        $carname = htmlspecialchars($row['carname']);
        $price = htmlspecialchars($row['price']);
        $seats = htmlspecialchars($row['seats']);
        $modelyear = htmlspecialchars($row['modelyear']);
        $fuel = htmlspecialchars($row['fuel']);
        $mainimage = htmlspecialchars($row['mainimage']);

        $output .= '<div class="singleCar" id="car_'.$id.'">
                        <div class="imgDiv">
                            <img src="'.SITEURL.'Assets/'.$mainimage.'" alt="Car Image">
                        </div>
                        <h5 class="carTitle">'.$carname.'</h5>
                        <div class="properties grid">
                            <div class="singleProperty flex">
                                <i class="bx bxs-group icon"></i>
                                <span class="text">'.$seats.' Siéges</span>
                            </div>
                            <div class="singleProperty flex">
                                <i class="uis uis-anchor icon"></i>
                                <span class="text">Autopilote</span>
                            </div>
                            <div class="singleProperty flex">
                                <i class="bx bxs-calendar-event icon"></i>
                                <span class="text">'.$modelyear.'</span>
                            </div>
                            <div class="singleProperty flex">
                                <i class="bx bxs-gas-pump icon"></i>
                                <span class="text">'.$fuel.'</span>
                            </div>
                        </div>
                        <div class="price_seller flex">
                            <span class="price">$'.$price.'</span>
                            <a href="'.SITEURL.'View/Frontend/carDetails.php?id='.$id.'">
                                <span class="btn primaryBtn">Details</span>
                            </a>
                        </div>
                    </div>';
    }

    if($output == '') {
        $output = '<span>Pas de voitures trouvées!</span>';
    }

    echo $output;
}
?>
