<?php
/**
 * Site - controler.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 16.12.2019
 *Time : 14:41
 */
/**
 * function to  redirect the user to the home page
 * (dependending the action received by the index)
 */
function home() {
    $_GET['action']="home";
    require "View/home.php";
}