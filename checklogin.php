<?php
if(
    isset($_GET['username'])
    and isset($_GET['password'])
    and $_GET['username']=="admin"
    and $_GET['password']=="pass"    
){
    //do nothing.
}else{
    header("location: login.php");
}