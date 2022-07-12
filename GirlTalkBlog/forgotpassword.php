<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./forgotpassword.css">
    <style>
        body,
        border {
            /* display: flex;
            justify-content: center; */
            box-shadow: 0px 4px 4px black;
            margin: auto;
        }
    </style>
</head>

<body style="background-color: rgb(212, 226, 238);">
    <main class="forgotpasswordcontainer" style="box-shadow: 0px 4px 4px rgb(114, 11, 37);">>
        <img src="../images/girltalk.jpg" alt="logo" height="80" width="130" style="box-shadow: 0px 2px 4px  rgb(139, 42, 99);">
        <h1 style="text-shadow: 0px 2px 2px rgb(161, 61, 120);">New Password</h1>

        <div id="error" style="color:red;"></div>
        <form class="main" action="" method="POST">
            <label for="email"><strong> Email: </strong></label>
            <input id="email" name="email" placeholder="@gmail.com"" type=" email" required />

            <label for="phonenumber"> <strong> Phone Number:</strong> </label>
            <input tel="mobile" name="telephone" placeholder="+353" type="number" required />

            <label for="newpassword"> <strong> New Password: </strong></label>
            <input type="password" id="password" name="newpassword" placeholder="newpassword" text="text" required />

            <label for="retype-password:"> <strong> Retype-Password: </strong></label>
            <input type="password" id="confirm-password" name="confirmpassword" placeholder="retype-password" required />
            <br />
            <div class="buttoncontainer"> <a href=""></a>
                <button type="submit" id="continuebutton" style="box-shadow: 0px 8px 4px rgb(161, 61, 120);"> <strong>Continue </strong></button>
            </div>
            <br />
            <br />
        </form>

    </main>

    <script src="./forgotpass.js"></script>
</body>

</html>