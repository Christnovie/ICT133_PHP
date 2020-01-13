<?php
/**
 * Site - login.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.01.2020
 *Time : 09:24
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Acceuil";
?>
<div>
    <h1>Login</h1><br>
    <form action="index.php?action=login" id="formulaireLogin" method="post">
        <label>Username</label>
        <input type="text" id="username" name="inputUsername" placeholder="input your username" value="" required><br>
        <label>Password</label>
        <input type="password" id="password" name="pwd" placeholder="Enter password" value="" required>
        <output typeof="a"></output>
        <br>
        <input type="submit" name="log" value="Login"><input type="reset" value="Reset">

    </form>
</div>


<?php

$content = ob_get_clean();
require 'gabarit.php';

?>
