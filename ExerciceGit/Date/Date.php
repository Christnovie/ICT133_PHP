<?php
/**
 *Projet  :Date
 *Auteur : christnovie kiala binga
 *Version : 1.0
 *Date : 02/12/2019
 */
?>
<!DOCTYPE html >

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
    <link rel="stylesheet" type="text/css" href="DateCSS.css">
</head>
    <body>
        <div id="contenent">
            <div class="dates">
                <?php


                echo date('l d F o');
                echo '<br>';
                echo date('D dS o ');
                echo '<br>';
                echo date('d/m/o g:i a');
                echo '<br>';
                echo date('d D o, G:i:s ');
                echo '<br>';
                echo date('D,d M o G:i:s O');

                ?>
            </div>
        </div>
</body>

</html>


