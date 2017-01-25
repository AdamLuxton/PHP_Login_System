<?php
session_start();

function confirm_logged_in(){
  if(!isset($_SESSION['users_id'])){
    redirect_to("loginpage.php");
  }
}

function confirm_logged_out(){ //Redirect from the login page if logged in already.
  if(isset($_SESSION['users_id'])){
    redirect_to("index.php");
  }
}

function logged_out(){
  session_destroy();
  redirect_to("../../loginpage.php");
}

?>
