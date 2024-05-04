<?php 
include 'Connection.php';
?>
<!DOCTYPE html> 
<html> 
  <head> 
    <title> Sign Up</title> 
    <style> 
      /* CSS styles */ 
      body { 
        font-family: "Trirong", serif;
        background-color: #f5f5f5; 
        background-image: url("WB-Create-Your-New-Year-Plant-Journal-houseplant-leaf-header.png");
        background-size: cover;
      } 
      form { 
        background-color: #fff; 
        max-width: 500px; 
        margin: 0 auto; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
      } 
      h1 { 
        text-align: center; 
        color: #416d3e; 
      } 
      input[type=text], input[type=password], input[type=email] { 
        width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
      } 
      button { 
        background-color: #416d3e; 
        color: #fff; 
        padding: 12px 20px; 
        border: none; 
        border-radius: 4px; 
        cursor: pointer; 
        width: 100%; 
      } 
      button:hover { 
        background-color: #3e8e41; 
      } 
      .container { 
        padding: 16px; 
      } 
      span.error { 
        color: red;
      } 
    </style> 
  </head> 
  <body> 
    <form action="sign.php" method="post">
      <h1> Sign Up</h1> 
      <div class="container"> 
        <label for="name"><b>Name</b></label> 
        <input type="text" placeholder="Enter Name" name="name" required> 
        <span class="error"><?php echo isset($nameErr) ? $nameErr : ''; ?></span></br>
        
        <label for="email"><b>Email</b></label> 
        <input type="email" placeholder="Enter Email" name="email" required> 
        <span class="error"><?php echo isset($emailErr) ? $emailErr : ''; ?></span></br>
        <!-- Display email error message -->
        
        <label for="password"><b>Password</b></label> 
        <input type="password" placeholder="Enter Password" name="password" required> 
        <span class="error"><?php echo isset($passwordErr) ? $passwordErr : ''; ?></span></br>
        
        <label for="confirm-password"><b>Confirm Password</b></label> 
        <input type="password" placeholder="Confirm Password" name="confirm-password" required> 

        <button type="submit" name="submit" value="Submit">Sign Up</button> 
      </div> 
    </form> 
  </body> 
</html>