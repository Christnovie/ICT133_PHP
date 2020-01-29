<?php
/**
 * Site - home.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 16.12.2019
 *Time : 14:50
 */
/** tampon de fliux stockéen mémoire */

ob_start();
$titre = "Rent a show - Acceuil";
?>
<!-- edit Calendar content -->
<div>
    <?php
    /**
     * ICT133_PHP - arrays_string.php
     *version : 1.0
     *Initial version by: Christnovie.KIALA-BI
     *Initial version created on : 09.12.2019
     */

    date_default_timezone_set('UTC');

    /** @var TYPE_NAME $Month this array content all month of year and count for the month */
    $Month = array(
        'January' => date("t",mktime(0,0,0,2,0,$_GET['year'])),
        'February' => date("t",mktime(0,0,0,3,0,$_GET['year'])),
        'March' => date("t",mktime(0,0,0,4,0,$_GET['year'])),
        'April' => date("t",mktime(0,0,0,5,0,$_GET['year'])),
        'May' => date("t",mktime(0,0,0,6,0,$_GET['year'])),
        'June' => date("t",mktime(0,0,0,7,0,$_GET['year'])),
        'July' => date("t",mktime(0,0,0,8,0,$_GET['year'])),
        'August' => date("t",mktime(0,0,0,9,0,$_GET['year'])),
        'September' => date("t",mktime(0,0,0,10,0,$_GET['year'])),
        'October' => date("t",mktime(0,0,0,11,0,$_GET['year'])),
        'November' => date("t",mktime(0,0,0,12,0,$_GET['year'])),
        'December' => date("t",mktime(0,0,0,1,0,$_GET['year'])));

    /** @var TYPE_NAME $Dweek this array content days + abbreviation of week */
    $Dweek = array(
        'Monday' => 'Mon',
        'Tuesday' => 'Tue',
        'Wednesday' => 'Wed',
        'Thursday' => 'Thu',
        'Friday' => 'Fri',
        'Saturday' => 'Sat',
        'Sunday' => 'Sun',
    );
    /** @var TYPE_NAME $date */
    $date = array(date('j'), date('n'), date('Y'), date('D'));
    /** @var TYPE_NAME $current_date */
    $current_date = $date[0];
    if (isset($_GET['month'])) {
        $currentMonth = $_GET['month'];
    } else {
        $currentMonth = $date[1];
        $_GET['month'] = $currentMonth;
    }
    if (isset($_GET['year'])) {
        $currentYear = $_GET['year'];
    } else {
        $currentYear = $date[2];
        $_GET['year'] = $currentYear;
    }
    if ($currentMonth < 1) {
        $currentMonth = 12;
        $currentYear = $currentYear - 1;
    } elseif ($currentMonth > 12) {
        $currentMonth = 1;
        $currentYear = $currentYear + 1;
    }

    $choseMont = date("F", mktime(0, 0, 0, $currentMonth +1, 0, 0));

    $first_daysMont = date("w", mktime(0, 0, 0, $_GET['month'], 1, $_GET['year']));

    foreach ($Month as $item => $value) {
        if ($item == $choseMont) {
            $nbDays = $value;
        }
    }

    ?>



    <link rel="stylesheet" type="text/css" href="View/Content/scripts/bootstrap/css/arraysStringCSS.css">



    <h1>CSS Calendar</h1>


    <div class="month">

        <?php echo $currentYear ?>  <br>
        <ul>

            <ul>


                <li class="prev"><a
                        href="index.php?action=home&month=<?php echo $currentMonth - 1; ?>&year=<?php echo $currentYear; ?>">
                        <button value="Precedent">Precedent</button>
                    </a>&nbsp;&nbsp;
                </li>



                <span style="font-size:18px"><?php  echo $choseMont ?>  </span>
                <li class="next"><a
                        href="index.php?action=home&month=<?php echo $currentMonth + 1; ?>&year=<?php echo $currentYear; ?>">
                        <button >Suivant</button>
                    </a>&nbsp;&nbsp;</li>
            </ul>

        </ul>
    </div>

    <ul class="weekdays">

        <?php

        foreach ($Dweek as $item) {
            echo "<li>$item</li>";

        }

        ?>


    </ul>

    <ul class="days">
        <?php
        $num_date = 0;
        for ($i = 1; $i <= $nbDays + $first_daysMont - 1; $i++) {
            if ($i < $first_daysMont) {
                echo "<li> </li>";
            } else {
                $num_date++;
                if ($num_date == $current_date && $currentMonth == $date[1]) {

                    echo "<li><span class='active'> $num_date </span></li>";

                } else
                    echo "<li>$num_date</li>";

            }
        }
        ?>


    </ul>



</div>
<!-- end Calendar content  -->
    <div class="span12" id="divMain">

        <h1>Nos activités</h1>

        <p><strong>Rent A Snow</strong> est spécialisée dans la location de snows. Nous avons tout types de
            modèles :
        <ul>
            <li>des plus récents au plus anciens,
            <li>pour débutants ou confirmés,
            <li>pour de la piste ou du hors-piste
        </ul>
        La location peut se faire au jour, à la semaine, au mois ou à la saison.
        </p>
        <p>
            Nous proposons aussi des cours privés ou en petits groupe (4 personnes maximum) pour tous les
            niveaux avec des moniteurs certifiés par l'école suisse de snowboard au prix de 60.- /heure.
        </p>

        <br/>
        <br/>

        <div class="row-fluid">
            <div class="span3">
                <div class="box">
                    <i class="icon-wrench"></i>
                    <h4 class="title">Entretien</h4>
                    <hr/>
                    <p>
                        Le matériel est toujours contrôlé avant d'être mis à disposition des clients. A
                        chaque fois que vous louerez un snow, vous pouvez partir surfer tranquille.
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-leaf"></i>
                    <h4 class="title">Environnement</h4>
                    <hr/>
                    <p>
                        Nous veillons à respecter l'environnement en utilisant au maximum du matériel
                        recyclable et en prenant de consommer un minimum d'énergie lors de nos activités au
                        magasin,
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-edit"></i>
                    <h4 class="title">Contrat</h4>
                    <hr/>
                    <p>
                        Un contrat sera signé à chaque location. D'autre part nous travaillons en étroite
                        collaboration avec la Rega et garantissons des conditions de sauvetage optimales.
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-signal"></i>
                    <h4 class="title">Signal</h4>
                    <hr/>
                    <p>
                        Pour ceux qui aiments les sensations forte, nous louons du matériel de protection
                        d'avalanches.
                    </p>
                </div>
            </div>
        </div>


    </div>


<?php
$content = ob_get_clean();
require "gabarit.php";

