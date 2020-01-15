<?php
/**
 * Site - userCreate.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 13.01.2020
 *Time : 15:58
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Acceuil";
?>
<div>
    <h1>Register</h1><br>
    <form action="index.php?action=registry" id="formulaireRegister" method="post">
        <label>Username</label>
        <input type="text" id="" name="createUser" placeholder="input your username" value="" minlength="4" required><br>
        <label>Password</label>
        <input type="password" id="" name="createpwd" placeholder="Enter password" value="" minlength="8" required>

        <br>
        <input type="submit" name="register" value="Register"><input type="reset" value="Reset"><br>
       Déjà membre?          <a href="index.php?action=login">Login </a>
    </form>
</div>


<?php

$content = ob_get_clean();
require 'gabarit.php';

?>
