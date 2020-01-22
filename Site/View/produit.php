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
if(isset($_SESSION['login']))
$itemAcces = "item";
else
    $itemAcces = "login";
$index = 0;
?>
    <link href="View/Content/script/bootstrap/css/boostrapShop" rel="stylesheet" type="text/css">
    <h1> Snowboard shop </h1>
    <div class="contentArea">
        <div class="divPanel notop page-content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="yoxview">
                        <div class="row-fluid">

                        <?php
                            /** @var  $item *reading into the array and pin up data of snow with information */
                            foreach ($_GET['prContent'] as $item)  : ?>
                                <?php foreach ($item as $value)  : ?>
                                   <?php if($value->id == $index || $value == 1) : ?>
                                        <ul class="thumbnails">


                                    <?php $index = $index+4; endif;?>

                                    <?php   if($index >= $value->id) : ?>


                                             <li class="span3">
                                                    <div class="thumbnail">
                                                      <a href="<?='index.php?action='.$itemAcces.'&element='.$value->name?>" name="<?= $value->name?>"><img src="<?= 'Modele/'.$value->image.'.jfif'?>" alt="Thumbnail Placeholder" title="Thumbnail Placeholder" /></a>
                                                      <div class="caption">
                                                        <h3> <?php $value->name ?> </h3>
                                                        <p> <?= $value->marque ?></p>
                                                        <p><a href="<?='index.php?action='.$itemAcces.'&element='.$value->name?>" class="btn btn-primary">Buy</a></p>
                                                      </div>
                                                    </div>
                                                  </li>

                                    <?php endif;?>
                                   <?php if($value->id == $index) : ?>
                                            </ul>;
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            <?php endforeach; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!--/End Portfolio Content Area-->
<?php

$content = ob_get_clean();
require 'gabarit.php';

?>