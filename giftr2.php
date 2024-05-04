<?php 
$cclore=$_COOKIE['BGcolor'];
include 'Connection.php';
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="gifts.css" />
    <header class="header1">
        <div class="container2">
            <h1>Soil Store</h1>
            <nav class="nav1">
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Plants</a>
                        <ul>
                            <li><a href="indoor.php">Indoor Plants</a></li>
                            <li><a href="OutDoorProduct.php">Outdoor Plants</a></li>
                            <li><a href="aromatic.php">Aromatic Plants</a></li>
                            <li><a href="takeCare.html">Plant care</a></li>
                        </ul>

                    <li><a href="giftr2.php" class="gift">Gifts</a></li>
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
        <script src="purchase.js" async></script>
    </header>
</head>


<body style="background-color:<?php echo $cclore; ?>">

    <div class="product">
        <table class="product-table">
            <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    // Ensure that $link is defined (you may need to include the database connection file)
    // $link = mysqli_connect("localhost", "root", "password", "your_database");

    $product_id = $_GET["id"];
    $user_id = $_SESSION["user_id"];
    $quantity = $_POST["quantity"];

    // Check if the shopping cart session is set for the user
    if (isset($_SESSION["shopping_cart"][$user_id])) {
        $item_array_id = array_column($_SESSION["shopping_cart"][$user_id], "item_id");

        // Check if the product is not already in the cart
        if (!in_array($product_id, $item_array_id)) {
            array_push($_SESSION["shopping_cart"][$user_id], [
                'item_id' => $product_id,
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $quantity,
                'image1_path' => $_POST["image_path"]
            ]);
        } else {
            // Product is already in the cart
            echo '<script>alert("Item Already Added")</script>';
        }
    } else {
        // Shopping cart session is not set for the user, create it
        $_SESSION["shopping_cart"][$user_id] = [
            [
                'item_id' => $product_id,
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $quantity,
                'image1_path' => $_POST["image_path"]
            ]
        ];
    }

    // Insert item into the database cart table
    $insert_query = "INSERT INTO carts (user_id, plant_id, quantity) VALUES ($user_id, $product_id, $quantity)";
    $insert_result = mysqli_query($link, $insert_query);

    if ($insert_result) {
        echo "Item added to the cart successfully.";
    } else {
        echo "Error adding item to the cart: " . mysqli_error($link);
    }
}

                $sql = "SELECT * FROM `plant`.`plants` WHERE category = 'gift'";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    $counter = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                    if ($counter % 3 == 0) {
                        // Start a new row for every 3 products
                        echo "<tr>";
                    }
                    echo "<td>";
                    echo "<div class='poduct-box'>";
                    echo "<img src='" . $row['image_path'] . "' class='product-img'>";
                    echo "<p class='product-title'>" . $row['name'] . "</p>";
                    echo "<h6 class='product-price'>" . $row['price'] . " SR</h6>";
                    echo '<form method="post" action="giftr2.php?action=add&id=' . $row["plant_id"] . '">';
                    echo '<input type="hidden" name="hidden_name" value="' . $row["name"] . '" />';
                    echo '<input type="hidden" name="hidden_price" value="' . $row["price"] . '" />';
                    echo '<input type="hidden" name="image1_path" value="' . $row["image_path"] . '" />';
                    echo '<button type="submit" name="add_to_cart" class="buy">';
                    echo '<img src="bx-cart-add.svg" alt="Add to Cart" class="buy-img">';
                    echo '</button>';
                    echo '<input type="number" name="quantity" value="1" />';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo "</div>";
                    echo "</td>";
                    $counter++;
                    if ($counter % 3 == 0) {
                        // End the row after every 3 products
                        echo "</tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='3'>No plants available</td></tr>";
            }
            ?>
        </table>
    </div>



    <!------------------------------------CART--------------------------------------->

    <main>
    <?php
    echo generateCart($_SESSION["shopping_cart"],'giftr2.php');
    ?>
<main>

</body>

</html>