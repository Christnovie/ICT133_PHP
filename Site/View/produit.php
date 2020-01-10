<?php
/**
 * Site - produit.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.01.2020
 *Time : 14:10
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Acceuil";
?>



<?php
$content = ob_get_clean();
require 'gabarit.php';

?>