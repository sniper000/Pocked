<?php 
    include("db.php");
    $user=selecionaumdado("SELECT * FROM user WHERE email='".$_POST["mail"]."' AND password='".$_POST["password"]."'");

    if ($user){
        session_start();
        $_SESSION["ID"] = $user["id"];
        $_SESSION["NAME"] = $user["name"];
        $_SESSION["EMAIL"] = $user["email"];
        
        echo("login");
     } else {
        echo("error");
     }
?>