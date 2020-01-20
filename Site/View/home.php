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

<div>
<?php
    date_default_timezone_set('UTC');
    $Month = array('January','February ','March','April','May','June','Jully','July','August','September','October','November','December');
    $Dweek = array(
    'Monday' => 'Mon',
    'Tuesday' => 'Tue',
    'Wednesday' => 'Wed',
    'Thursday' => 'Thu',
    'Friday' => 'Fri',
    'Saturday' => 'Sat',
    'Sunday' => 'Sun',
    );
    $date = array(date('j'),date('F'),date('Y'),date('d')) ;


    $days = $date[0];
    $nowMonth = $date[1];

    $nowYear = $date[2] ;

    $f = 0;

    ?>



    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="View/Content/scripts/bootstrap/css/arraysStringCSS.css">
    </head>
    <body>

    <h1>CSS Calendar</h1>


    <div class="month">
        <ul>

            <ul>

                <li class="prev"  >

                </li>

                <li class="prev" >&#10094;</li>


                <?php echo $nowMonth ?><br>
                <span style="font-size:18px"><?php echo $nowYear ?></span>
                <li class="next">&#10095;</li>
            </ul>

        </ul>
    </div>

    <ul class="weekdays">

        <?php
        foreach ($Dweek as $item ){
            echo "<li>$item</li>";
        } ;
        ?>



    </ul>

    <ul class="days">
        <?php
        $numValid = 1;
        for($i = 1;$i <= 31;$i++){

            if($i == $days){
                echo"<li><span class='active'>$i</span></li>";
                $numValid++;
            }
            else

                echo"<li>$i</li>";


        }
        ?>



    </ul>

    </body>
</div>
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

