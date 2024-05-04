<?php 
$cclore=$_COOKIE['BGcolor'];
include 'Connection.php';
?>
<!DOCTYPE html>
<html>
  <title>soil store</title>
	<link rel="stylesheet" href="Hanan2.css">
    <script src="Hanan2.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
     <script src="purchase.js" async></script>
     <style>
      
        input[type="radio"] {
          margin-right: 5px;
        }
        label {
          margin-right: 10px;
        }
      </style>

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
                    <li><a href="indoor.php">Vases</a></li>
                    <li><a href="giftr2.php">Gifts</a></li>
                    <li><a href="ShowYourProduct.php">Show Your Products</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="#" class="cart-icon"><img src="https://image.pngaaa.com/58/293058-middle.png" width="50" height="25"></a>
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
        <div class="container1">
            <img class="image" src="plantHeader.jpg" alt="Header">
            <div class="text-container">
              <div class="text">
                <h3>Show your Product</h3>
                <p>We are pleased to display your products and services related to plants and gardens through the botanical store by sending your data through the following form, including the products that you want to display in the store or the services that you provide, and we will contact you to start displaying your products and services</p>
            </div>
          </div>
        </div>
        <form method="POST" enctype="multipart/form-data" action="productSubmit.php">
        <label for="idname">Plant Name:</label>
        <input type="text" id="idname" name="plant_name" required><br><br>
        
        <label for="upload">Attachment:</label> 
        <input type="file" accept="image/*" id="upload" name="plant_image" required><br><br>
        
        <label for="Description">Description:</label>
        <textarea id="Description" name="description" cols="30" rows="5"></textarea><br><br>
        
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" step="0.01" required><br><br>
        
       
        <p>
            <b>Plant type:</b><br>
            <label>
                <input type="radio" name="plant_type" id="choice1" value="indoor"> Indoor
                <input type="radio" name="plant_type" id="choice2" value="outdoor"> Outdoor
                <input type="radio" name="plant_type" id="choice3" value="aromatic"> Aromatic
            </label>
        </p>
        
        <input type="submit" value="Send" class="sendButton"/>
    </form>

            <footer><p>&copy;2023 soil store. All rights reserved.</p></footer>

       

    <!------------------------------------CART--------------------------------------->

<main>
    <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        <div class="cart-content">
        
            <!-- Cart Items will be added here dynamically -->
            
            <div class="product">
                <div class="cart-box">
                    <img src="f8.jpg" class="cart-img">
                    <div class="detail-box">
                        <p class="cart-product-title">A Flower package</p>
                        <h6 class="product-price">150 SR</h6>
                        <input type="number" value="1" class="cart-quantity">
                    </div>
                
               <!--remove cart-->
                    
                    <div>
                        <img src="bxs-trash.svg" class="crat-remove">
                    </div>
                </div>
            </div>


          
        </div>
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">$0</div>
        </div>
        <button type="button" class="btn-buy">Buy Now</button>
        <img src="bx-x (1).svg" class="close-cart">
    </div>
</body>
</html>