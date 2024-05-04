<?php 
$cclore=$_COOKIE['BGcolor'];
include 'Connection.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>soil store</title>
  <link rel="stylesheet" href="saraabdullahcss.css">
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
          <li><a href="#" class="cart-icon"><img src="https://image.pngaaa.com/58/293058-middle.png" width="80"
                height="80"></a>
          </li>
          <li class="dropdown2">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/8801/8801434.png" width="40" height="25"></a>
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

  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #416d3e;
      color: white;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    h1 {
      text-align: center;
      color: #416d3e;
    }

    p {
      margin-bottom: 20px;
      font-size: 18px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    img {
      max-width: 50%;
      height: auto
    }

    a {
      text-decoration: none;
      color: #436444;
    }
  </style>
  </head>

  <body>
    <div class="container">
      <h1>Indoor Plants</h1><br>
      <p>Welcome to our selection of beautiful home plants. Browse through our options below and click on the name of
        the plant to search Google for more information.</p>
      <table>
        <thead>
          <tr>
            <th>Plant Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
        <?php
               
                $sql = "SELECT * FROM `plant`.`plants` WHERE category = 'indoor'";
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row["name"] . '</td>';
                        echo '<td>' . $row["price"] . '</td>';
                        echo '<td>' . $row["description"] . '</td>';
                        echo '<td><img src="' . $row["image_path"] . '" alt="' . $row["name"] . '"></td>';
                        echo '</tr>';
                    }
                } else {
                    echo "Query failed: " . mysqli_error($link);
                }

                mysqli_close($link);
                ?>
        </tbody>
      </table>
    </div>

    <footer>
      <p>&copy;2023 soil store. All rights reserved.</p>
    </footer>


    <!------------------------------------CART--------------------------------------->

    <main>
    <?php
    echo generateCart($_SESSION["shopping_cart"],'indoor.php');
    ?>
<main>
  </body>

</html>