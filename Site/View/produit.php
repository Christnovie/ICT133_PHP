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
<link href="View/Content/script/bootstrap/css/boostrapShop" rel="stylesheet" type="text/css">
    <h1> Snowboard shop </h1>
    <div class="table table-hover  table-condensed">
        <table >
            <tr>

                <?php
                foreach ($_GET['prContent'] as $item) {
                    foreach ($item as $value) {
                        echo '<td ><a href=""><img src=" ' . $value->image . '  ">', " <br> ", $value->name, "", "</a></td>               ";

                    }
                }
                ?>
            </tr>
        </table>
    </div>

<?php
$content = ob_get_clean();
require 'gabarit.php';

?>