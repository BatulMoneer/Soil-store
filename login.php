
<style>
    .error-message {
        color: #B01313;
    }
</style>

<?php 
$link = mysqli_connect("localhost:3307","root","","plant");
$errorPass=$errorUser="";
session_start();
if($_SERVER['REQUEST_METHOD']== "POST") {
    $login_Info = $_POST['login_Info'];
    $PASSWORD = $_POST['PASSWORD'];
    $sql = "SELECT * FROM users WHERE username='$login_Info' OR email = '$login_Info'";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if(password_verify($PASSWORD, $row["PASSWORD"])){
            $_SESSION["username"] = $row["username"];
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION['authenticated'] = true;
            header("Location: Home.php");
            exit();
        } else {
            $errorPass='<span class="error-message">Please enter corect password.<br> Please try again.</span>';
        }
    } else {
        $errorUser = '<span class="error-message">Please entere the correct username/email or </br><a href="sign.html" style="text-decoration: none;"><b style="color:#416d3e;">Sign Up</b></a></span>';

    }
}
include('login.html');
?>