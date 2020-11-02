<?php

include "config.php";
include "header.php";

if (isset($_POST['ilogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    if ($username == "" || $password == "") {
        $_SESSION['error'] = "Please Your Username & Password";
        header('location:login.php');
        exit;
    } else {
        $query = "SELECT * FROM `client_signup` WHERE `username` ='$username' && `password` = '$password'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["username"] = $row["username"];
            $_SESSION['success'] = "login Successfully Done";
            header('location:index.php');
            exit;
        } else {
            $_SESSION['error'] = "Please Enter valid Username or Password";
            header('location:login.php');
            exit;
        }
    }
}

?>
<link rel="stylesheet" href="css/login.css">
<div class="imgbox">
    <img id="staysafe-img" src="./images/stay-safe.svg" alt="Stay Safe">
</div>
<!-- Login Form -->
<form class="box" action="login.php" method="post">
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Username" require>
    <input type="password" name="password" placeholder="Password" require>
    <input type="submit" name="ilogin" value="Login">
    <p class="alt-txt">New User ? Go to <a id="alt-txt" href="signup.php">SignUp</a></p>
</form>
<?php include "./footer.php"; ?>