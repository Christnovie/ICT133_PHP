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


foreach ($_GET['items'] as $item=>$value){
    echo $value->item;
}


?>


<?php

$content = ob_get_clean();
require 'gabarit.php';

?>