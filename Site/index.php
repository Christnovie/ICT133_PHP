<?php
/**
 * Site - index.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 16.12.2019
 *Time : 14:25
 */

require "controler/controler.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $element = $_GET['element'];
    $email = $_GET['sendMessage'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login':
            login($_POST);
            break;
        case 'produit' :
            produit();
            break;
        case 'deconnexion' :
            deconnect();
            break;
        case 'contact' :
            contact($_POST);
            break;
        case 'registry' :
            register($_POST);
            break;
        case 'item' :
            item($element);
            break;
        case 'additem' :
            addShop($element);
            break;
        case 'email' :
            email($email);
            break;

        default :
            home();
    }
} else {
    home();

}
