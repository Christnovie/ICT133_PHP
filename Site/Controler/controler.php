<?php
/**
 * Site - controler.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 16.12.2019
 *Time : 14:41
 */

require "Modele/model.php";
/**
 * function to  redirect the user to the home page
 * (dependending the action received by the index)
 */
function home() {
    $_GET['action']="home";
    require "View/home.php";
}

/**
 *function for login
 */
function login(){
   
    $_GET['action']= "login";
    $password = @$_POST['pwd'];
    if(checklogin($password))
       require "index.php";
   else
    require "View/login.php";
}

/**
 *function for produit 
 */
function produit(){
    $_GET['action'] = "produit";
    require "View/produit.php";
}

/**
 *function for contact
 */
function contact(){
    $_GET['action'] = "contact";
    require "View/contact.php";
}
