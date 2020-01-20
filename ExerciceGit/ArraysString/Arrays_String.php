<?php
/**
 * ICT133_PHP - arrays_string.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 09.12.2019
 */

date_default_timezone_set('UTC');

/** @var TYPE_NAME $Month this array content all month of year and count for the month */
$Month = array('January' => 31, 'February ' => 28, 'March' => 31, 'April' => 30, 'May' => 31, 'June' => 30, 'July' => 31, 'August' => 31, 'September' => 30, 'October' => 31, 'November' => 30, 'December' => 31);
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
$date = array(date('j'), date('F'), date('Y'), date('d'));
if(isset($_GET['month']))
    $currentMonth = $date[1];
else
    $currentMonth = $_GET['month'];
if(isset($_GET['year']))
    $currentYear = $date[2];
else
    $currentYear = $_GET['year'];
$first_daysMont = date("w", mktime(0, 0, 0, $currentMonth, 1, $currentYear));
$int_nbjAV = date("t", mktime(0, 0, 0, ($currentMonth - 1 < 1) ? 12 : $currentMonth - 1, 1, $currentYear)); // nb de jours du moi d'avant
$int_nbjAP = date("t", mktime(0, 0, 0, ($currentMonth + 1 > 12) ? 1 : $currentMonth + 1, 1, $currentYear)); // b de jours du mois d'apres
foreach ($Month as  $item => $value){
    if($item == $_GET['mois'] ){
        $nbDays =  $value;
    }
}




?>
<!DOCTYPE html >

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
    <link rel="stylesheet" type="text/css" href="arraysStringCSS.css">
</head>
<body>

<h1>CSS Calendar</h1>


<div class="month">
    <ul>

        <ul>



            <li class="prev"><a
                        href="Arrays_String.php?mois=<?php echo $currentMonth - 1; ?>&amp;annee=<?php echo $currentYear; ?>"></a>&nbsp;&nbsp;<?php echo $tab_mois[$currentMonth]; ?>
                &nbsp;&nbsp;<a></li>


            <?php ?><br>
            <span style="font-size:18px"><?php  ?></span>
            <li class="next">&#10095;</li>
        </ul>

    </ul>
</div>

<ul class="weekdays">

    <?php

    foreach ($Dweek as $item) {
        echo "<li>$item</li>";

    };

    ?>


</ul>

<ul class="days">
    <?php
    $numValid = 1;
    for ($i = 1; $i <= 31; $i++) {

        if ($i == $days) {
            echo "<li><span class='active'>$i</span></li>";
            $numValid++;
        } else

            echo "<li>$i</li>";


    }
    ?>


</ul>

</body>

</html>