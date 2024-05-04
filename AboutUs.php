<?php 
$cclore=$_COOKIE['BGcolor'];
include 'Connection.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>soil store</title>
	<style>
        .message {
            background-color: #f2f2f2;
            color: #333;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>
	<!--css-->
	<link rel="stylesheet" href="AboutUsStyle.css">
	<!--Google font-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
</head>
<script src="purchase.js" async></script>

<body style="background-color:<?php echo $cclore; ?>">
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
                    <li><a href="vases.php">Vases</a></li>
                    <li><a href="giftr2.php">Gifts</a></li>
                    <li><a href="ShowYourProduct.php">Show Your Products</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="#" class="cart-icon" ><img src="https://image.pngaaa.com/58/293058-middle.png" width="50" height="25"></a>
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
	<main>
	<img src="https://media.istockphoto.com/id/1336456138/vector/young-happy-woman-watering-her-potted-houseplants-at-leisure-time-botanist-amateur-caring.jpg?s=612x612&w=0&k=20&c=bpvDvRb6h_1Fx25NHQ528xjpc5AkdTbv0LhFc2DeYBA=" width="600" height = "400"/>
	<div class="whychooseus">
		<h2>Why Chosee Us</h2>
		<p>
			Choose us as your soil store for all your gardening needs, as we offer a wide variety of high-quality products such as soil, plants, and vases, along with expert advice and a convenient shopping experience.<br>Our gift section also makes it easy to find unique and thoughtful gifts for the gardeners in your life.<br> We are committed to providing our customers with the best possible products and services, and are passionate about helping you achieve your gardening goals.
		</p>
			<table>
		<tr>
			<th sccope="col"><img src="https://cdn-icons-png.flaticon.com/512/1042/1042536.png" width="50" height="50"></th>
			<th sccope="col"><img src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/512x512/gift.png" width="50" height="50"></th>
			<th sccope="col"><img src="https://e7.pngegg.com/pngimages/530/444/png-clipart-vcard-computer-icons-information-id-card-miscellaneous-text-thumbnail.png" width="50" height="50"></th>
		</tr>
		<tr>
			<td>10 Days Returns</td>
			<td>Offer & Gift</td>
			<td>Secure Payment</td>
		</tr>
		<tr>
			<td>Moneyback Guarantee</td>
			<td>On All Orders</td>
			<td>Protected By Paypal</td>
		</tr>
	</table>
	</div>
	<div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<fieldset class="Feedback">
		<legend>Feedback</legend>
		<label for="name">Name:</label>
		<input type="text" id="name" name="namee">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<label for="notes">Notes:</label>
		<textarea id="notes" name="notes"></textarea>
		</fieldset>
	<fieldset class="rateForm">
		<legend>Rate Our Website services</legend>
		<input type="radio" name="radioset" id="choice1" value="1">
		<label for="choice1">1</label>
		<input type="radio" name="radioset" id="choice2" value="2">
		<label for="choice1">2</label>
		<input type="radio" name="radioset" id="choice3" value="3">
		<label for="choice1">3</label>
		<input type="radio" name="radioset" id="choice4" value="4">
		<label for="choice1">4</label>
		<input type="radio" name="radioset" id="choice5" value="5">
		<label for="choice1">5</label>
		<input type="submit" value="submit"/>
		<div>
        <?php
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include_once 'feedbackSubmit.php';
        }
        ?>
		
    </div>
		

	</fieldset>	
	</form>
</div>
	</main>
	<footer>
			<p>&copy;2023 soil store. All rights reserved.</p>
	</footer>


</body>
</html>