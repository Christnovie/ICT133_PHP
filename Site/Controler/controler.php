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
 * @param $loginregister *containt all data of login
 */
function login($loginregister)
{

    $_GET['action'] = "login";
    if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {
        if (checklogin($loginregister)) {

            $_SESSION['login'] = $_POST['inputUsername'];
            $_SESSION['userEmail'] = $_GET['userEmail'];
            $_GET['action'] = "resultLogin";
            require "View/resultLogin.php";
        } else
            require "View/login.php";
    } else {
        require "View/resultLogin.php";
    }

}

/**
 *function for create user
 * @param $dataUser
 */
function register($dataUser)
{
    $erroreConfirme = "";
     $_GET['errorPassword'] = $erroreConfirme ;
    $_GET['action'] = "login";
    if (isset($dataUser['createUser'])) {
       if($dataUser['createpwd'] == $dataUser['confirmepwd']) {
           $_GET['action'] = "login";
           $_GET['errorConfirme'] = '';
           if (creatUser($dataUser)) {
               createItemSession($dataUser);
               require "View/login.php";
           }
           else
               require "View/userCreate.php";
       }else
           $_GET['errorConfirme'] = 'password no match';
           require "View/userCreate.php";

    } else {
        require "View/userCreate.php";

    }
}

/**
 *function for logout to session
 */
function deconnect()
{
    $_GET['action'] = "login";
    $_SESSION['login'] = "";
    session_unset();
    session_destroy();
    require "View/login.php";
}

/**
 *function for produit
 */
function produit()
{
    $_GET['action'] = "produit";

    $produit_content = snowsDatabase();
    $_GET['prContent'] =$produit_content;
    require "View/produit.php";
}

/**
 *function for contact
 * @param $_post
 */
function contact($_post)
{
    $_GET['action'] = "contact";
    $_GET['sendMessage'] = $_post;
    require "View/contact.php";
}
function email($emailData){
    $_GET['action'] = "contact";

    mail("cspoutnick@gmail.com \n",$emailData['email'],"test \n",$emailData['message']);
    require "View/contact.php";
}

/**
 * function for add item in json
 * @param $item
 */
function addshop($item){
    $_GET['action']="item";
    if(isset($item)){
        addItem($item);
        $_GET['element'] = "";

    }


    require "View/item.php";
}
/**
 *function for item shop
 * @param $item
 */
function item($item){
    $_GET['action']="item";
        $itemShop = snowsDatabase($item);
        $_GET['items'] = $itemShop;
    require "View/item.php";
}