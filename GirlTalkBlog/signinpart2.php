<?php
$email = $_POST['email'];
$password = $_POST['password'];
$cookieName = 'email';

// echo "<h1>Welcome User $email</h1>";

if ($email) {
    setcookie($cookieName, $email, $password, time() + (86400 * 30));
    echo "Welcome: $email <br/>";
} else {
    if (isset($_COOKIE[$cookieName])) {
        $cookieValue = $_COOKIE[$cookieName];
        echo "Welcome: $cookieValue <br/>";
    } else {
        echo "Not logged In";
    }
}
session_start();


// $email = $_POST['email'];
// $password = $_POST['password'];
$error = "";
$success = "";

if (isset($_POST['submit'])) {
    if ($email == "admin") {
        if ($password == "password") {
            $error = "";
            $success = "Welcome";
        } else {
            $error = "Invalid Password";
            $success = "";
        }
    } else {
        $error = "Invalid Email";
        $success = "";
    }
}

//$_SESSION['session_id' = 12345];
//echo $sessionValue;

//REDIRECT to different page;->  header("Location: /GirlTalkBlog/firstpage.php");

    //**ABOVE EXPLAINED */
    // $cookieName = 'session_id';
    // setcookie($cookieName, true, time() + (86400 * 30));
    // if(isset($_COOKIE[$cookieName])) {
    //     $cookieValue = $_COOKIE[$cookieName];
    //     echo "Cookie set: $cookieValue <br/>";
    //     echo "Cookie set: " . $_COOKIE[$cookieName];
    // }   else {
    //     echo "Cookie Not set";
    // }
