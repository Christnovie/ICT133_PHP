<?php
/**
 * Site - resultLogin.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 13.01.2020
 *Time : 09:03
 */

/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Login";

?>
<div>
    <h1>Login</h1><br>
    <?php
    if (isset($_POST['inputUsername']))
        echo "Connection reussi avec succés de ", $_POST['inputUsername'];
    else {
        echo "Vous êtes déjà connecté";
    }

    ?>
</div>


<?php
$content = ob_get_clean();
require 'gabarit.php';

?>
