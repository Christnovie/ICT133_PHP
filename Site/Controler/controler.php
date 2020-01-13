<?php
/**
 * Site - controler.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 16.12.2019
 *Time : 14:41
 */
session_start();
require "Modele/model.php";
/**
 * function to  redirect the user to the home page
 * (dependending the action received by the index)
 */
function home()
{
    $_GET['action'] = "home";
    require "View/home.php";
}

/**
 *function for login
 * @param $loginregist *containt all data of login
 */
function login($loginregister)
{

    $_GET['action'] = "login";
    if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {
        if (checklogin($loginregister)) {

            $_SESSION['login'] = $_POST['inputUsername'];
            $_GET['action'] = "resultLogin";
            require "View/resultLogin.php";
        } else
            require "View/login.php";
    } else {
        require "View/resultLogin.php";
    }

}

function deconnect()
{
    $_GET['action'] = "login";
    $_SESSION['login'] = "";
    require "View/login.php";
}

/**
 *function for produit
 */
function produit()
{
    $_GET['action'] = "produit";
    require "View/produit.php";
}

/**
 *function for contact
 */
function contact()
{
    $_GET['action'] = "contact";
    require "View/contact.php";
}
