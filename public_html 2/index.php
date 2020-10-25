<?php 
    if(!session_id())
{
    session_start();
}

    include("php/db.php");
    if (isset($_GET["opt"])) {
        $menuSwitch = $_GET["opt"];
    } else {
        $menuSwitch = '0';
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocked</title>
    <link rel="icon" type="image/png" href="../img/Imagens/logo_colored.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container-fluid">
            <div class="welcome">
            <div class="row title">
                <img src="img/Imagens/logo_colored.png" alt="POCKED">
                <p class="POCKED">POCKED</p>
            </div>

            <div class="logTitle">
            <h2 class="Login-Now">Login Now</h2>
            <p class="Please-login-to-cont">Please login to continue using our app.</p>
            </div>

            <div  class="row logInfo">
                <img class="loginIllustration" src="./img/Imagens/login_illustration.png" alt="Welcome">
            </div>
            </div>
            
            <div class="row loginForm">
                <form method="post">
                <div class="form-group">
                    <label for="mail">Email address</label>
                    <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="loginSubmit" id="logIn"><p>Login with Email</p></button>
            </div>
            
            <div class="row loginForm">
                <p style="text-align: center; margin-top: 10px;">or</p>
                    <button type="button" class="loginSubmit" data-toggle="modal" data-target="#registerNow"><p>Register</p></button>
            </div>
        </form>
    </div>
    
     <div class="modal fade" id="registerNow" tabindex="-1" aria-labelledby="registerNow" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="registerNow">Register today!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <form method="post">
            <div class="form-group">
                <label for="newName">Name</label>
                <input class="form-control" id="newName">
            </div>
            <div class="form-group">
                <label for="newMail">Email address</label>
                <input type="email" class="form-control" id="newMail" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="newPass">Password</label>
                <input type="password" class="form-control" id="newPass">
            </div>
            <button id="registerSubmit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
    


<script src="js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script src="js/register.js"></script>
</body>
</html>