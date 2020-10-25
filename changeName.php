<?php 
if(!session_id())
{
    session_start();
}
include("db.php");

if ($_POST["newName"] != null) {
    executasql("UPDATE `user` SET `name` = '".$_POST["newName"]."' WHERE `user`.`id` = '".$_SESSION["ID"]."'");
    echo("changeOK");
} else echo("Error");
?>