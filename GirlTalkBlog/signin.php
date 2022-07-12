<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./signin.css">
    <style>
        body,
        border {
            /* display: flex;
            justify-content: center;
            align-items: center; */
            box-shadow: 0px 8px 4px black;
            margin: auto;
        }
    </style>
</head>

<body style="background-color: rgb(212, 226, 238);">

    <main class="maincontainer" style="box-shadow: 0px 4px 4px rgb(114, 11, 37);">
        <img src="../images/girltalk.jpg" alt="logo" height="80" width="130" style="box-shadow: 0px 2px 4px  rgb(139, 42, 99);">
        <h1 style="text-shadow: 0px 2px 2px rgb(161, 61, 120);">Sign In</h1>
        <!--         
        <p class="error"><?php echo $error; ?> </p>
        <p class="sucess"><?php echo $succsess; ?> </p> -->

        <div id="error" style="color:red;"></div>

        <form class="main" action="./homepage.php" method="POST">
            <label for="email"><strong>Email Adress: </strong></label>
            <input type="email" id="email" name="emailaddress" placeholder="@gmail.com" required>
            <br />
            <label for="password"><strong>Password: </strong></label>
            <input type="password" id="password" name="password" placeholder="password" required />
            <br />
            <div class="buttoncontainer">
                <button type="submit" id="signinbutton" style="box-shadow: 0px 8px 4px rgb(161, 61, 120);"> <strong>Sign In </strong> </button>
            </div>

            <div class="forgotpassword">
                <a href="./forgotpassword.php">
                    <h5><em>Forgot Password?</em></h5>
                </a>
            </div>
        </form>
    </main>

</body>
<script type="text/javascript" src="./signin.js"></script>

</html>