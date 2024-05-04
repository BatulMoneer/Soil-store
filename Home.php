<?php 
$cclore=$_COOKIE['BGcolor'];
include 'Connection.php';
$maincolor="white";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $maincolor=$_POST['bg_color'];
    setcookie('BGcolor',$maincolor,time()+86400);
}
if(isset($_COOKIE['BGcolor'])){
    $color=$maincolor;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>soil store</title>
  <!--css-->
  <link rel="stylesheet" href="homeStyle.css">
  <!--Google font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <script src="homeScript.js" async></script>
  <script src="purchase.js" async></script>
  <meta name="viewport" content="width=device-width",initial-scale=1.0>
        <title>Cookies alart popup</title>
    </head>
    <body style="background-color:<?php echo $cclore; ?>">
    <nav style="background-color:beige">
        <h1>Choose the color</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <select name="bg_color">
        <option value="">Choose Background Color</option>
        <option value="#000000">Dark</option>
        <option value="#ffffff">Light</option>
        <option value="#d5ffc9">Soft Green</option>
        <option value="#f6ffc9">Soft yellow</option>
        <option value="#C5EAF7">Soft Blue</option>        
        </select>
        <input type="submit" name="submit" value="Send" />

</form>
</nav>
</head>

<body style="background-color:<?php echo $maincolor; ?>">
  <header>
    <div class="container">
      <h1>Soil Store</h1>
      <nav>
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
          <li><a href="#" class="cart-icon"><img src="https://image.pngaaa.com/58/293058-middle.png" width="50"
                height="25"></a>
          </li>
          <li class="dropdown2">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/8801/8801434.png" width="30" height="25"></a>
            <ul>
              <li><a href="sign.html">Sign Up</a></li>
              <li><a href="login.html">Log In</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


  <div class="homeText">
    <h2>Welcome to soil store!</h2>
    <p>We offer awide selection of plants, vases, and gifts for all your gardening needs.</p>
    <a href="#plantsDept">Shop Now</a>
  </div>

  <div class="plantsAnchor">
    <h3 id="plantsDept">Our Plants Departments</h3>
    <ul>
      <li>
        <a href="OutDoorProduct.php">
          <img src="anchorOutdoor.png" width="250" height="250" data-content="Outdoor Plants">
          <div class="name">Outdoor Plants</div>
        </a>
      </li>
      <li>
        <a href="indoor.php">
          <img src="anchorIndoor.png" width="250" height="250" data-content="Indoor Plants">
          <div class="name">Indoor Plants</div>
        </a>
      </li>
      <li>
        <a href="aromatic.php">
          <img src="anchorAromatic.png" width="250" height="250" data-content="Aromatic Plants">
          <div class="name">Aromatic Plants</div>
        </a>
      </li>
    </ul>
  </div>

  <nav style="background-color:beige">
        <h1>Choose the color</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <select name="bg_color">
        <option value="">Choose Background Color</option>
        <option value="#000000">Dark</option>
        <option value="#ffffff">Light</option>
        <option value="#d5ffc9">Soft Green</option>
        <option value="#f6ffc9">Soft yellow</option>
        <option value="#C5EAF7">Soft Blue</option>        
        </select>
        <input type="submit" name="submit" value="Send" />

</form>
</nav>
  <footer>
    <p>&copy;2023 soil store. All rights reserved.</p>
  </footer>


  <!------------------------------------CART--------------------------------------->

  <main>
    <?php
    echo generateCart($_SESSION["shopping_cart"],'Home.php');
    ?>
<main>
</body>

</html>