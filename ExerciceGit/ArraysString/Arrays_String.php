<?php
/**
 * ICT133_PHP - arrays_string.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 09.12.2019
 */
/**  */
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


$nowMonth = $date[1];

$nowYear = $date[2];

$f = 0;

?>
<!DOCTYPE html >

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
    <link rel="stylesheet" type="text/css" href="../../Site/View/Content/scripts/bootstrap/css/arraysStringCSS.css">
</head>
<body>

<h1>CSS Calendar</h1>


<div class="month">
    <ul>

        <ul>

            <li class="prev">

            </li>

            <li class="prev">&#10094;</li>


            <?php echo $nowMonth ?><br>
            <span style="font-size:18px"><?php echo $nowYear ?></span>
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