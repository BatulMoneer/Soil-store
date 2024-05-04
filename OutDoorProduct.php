<?php
$cclore=$_COOKIE['BGcolor']; 
include 'Connection.php';
?>
<!DOCTYPE html>

<html>

<head>
    <title>soil store</title>
    <link rel="stylesheet" href="Hanan2.css">
    <script src="Hanan2.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <script src="purchase.js" async></script>
</head>

<body style="background-color:<?php echo $cclore; ?>">
    <header class="header1">
        <div class="container2">
            <h1>Soil Store</h1>
            <nav class="nav1">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Plants</a>
                        <ul>
                            <li><a href="indoor.php">Indoor Plants</a></li>
                            <li><a href="OutDoorProduct.php">Outdoor Plants</a></li>
                            <li><a href="aromatic.php">Aromatic Plants</a></li>
                            <li><a href="takeCare.php">Plant care</a></li>
                        </ul>
                    <li><a href="giftr2.php">Gifts</a></li>
                    <li><a href="ShowYourProduct.php">Show Your Products</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="#" class="cart-icon"><img src="https://image.pngaaa.com/58/293058-middle.png"
                                width="50" height="25"></a>
                    </li>
                    <li class="dropdown2">
                        <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/8801/8801434.png" width="30"
                                height="25"></a>
                        <ul>
                            <li><a href="signUp.php">Sign Up</a></li>
                            <li><a href="login.html">Log In</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <nav>
        <ul class="navbar">
            <li class="nav-item"><a href="OutDoorProduct.php">outdoor</a></li>
            <li class="nav-item"><a href="indoor.php">Indoor</a></li>
            <li class="nav-item"><a href="aromatic.php">Aromatic</a></li>

        </ul>
    </nav>

    <table class="HTable">
        <caption>Outdoor Plants ───────────────────────────────────────────────────────────────────</caption>
        <?php
        $sql = "SELECT * FROM `plant`.`plants` WHERE category = 'outdoor'";
        $result = mysqli_query($link, $sql);

        if ($result) {
            $count = 0; // Counter for every three plants
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 3 === 0) {
                    echo '<tr>'; // Start a new row for every three plants
                }

                echo '<td>';
                echo '<div class="product-box">';
                echo '<div class="p-img-container">';
                echo '<div class="p-img">';
                echo '<a href="#">';
                echo '<img src="' . $row["image_path"] . '" class="plant1" alt="' . $row["name"] . '">';
                echo '</a>';
                echo '</div></div>';
                echo '<div class="product-category"><p>' . $row["name"] . '</p></div>';
                echo '<div class="price"><span class="p-price">' . $row["price"] . ' SR</span>';
                echo '<div class="size"><b>Size:</b> ' . $row["description"] . '</div>';
                echo '<form method="post" action="OutDoorProduct.php?action=add&id=' . $row["plant_id"] . '">';
                echo '<input type="hidden" name="hidden_name" value="' . $row["name"] . '" />';
                echo '<input type="hidden" name="hidden_price" value="' . $row["price"] . '" />';
                echo '<input type="hidden" name="image1_path" value="' . $row["image_path"] . '" />';
                echo '<input type="number" name="quantity" value="1" />';
                echo '<button type="submit" name="add_to_cart" class="buy-btn">';
                echo 'Add to Cart';
                echo '</button>';
                echo '</form>';
                echo '</div></div>';
                echo '</td>';

                $count++;
                if ($count % 3 === 0) {
                    echo '</tr>'; // Close the row after every three plants
                }
            }

            // If the last row has fewer than three plants, close it
            if ($count % 3 !== 0) {
                echo '</tr>';
            }
        } else {
            echo "Query failed: " . mysqli_error($link);
        }

        mysqli_close($link);
        ?>
    </table>


    <!------------------------------------CART--------------------------------------->

    <main>
    <?php
    echo generateCart($_SESSION["shopping_cart"],'OutDoorProduct.php');
    ?>
<main>
<footer>
    <p>&copy;2023 soil store. All rights reserved.</p>
</footer>

</html>