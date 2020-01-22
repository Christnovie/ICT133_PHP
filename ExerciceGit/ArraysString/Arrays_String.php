<?php
/**
 * ICT133_PHP - arrays_string.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 09.12.2019
 */

date_default_timezone_set('UTC');

/** @var TYPE_NAME $Month this array content all month of year and count for the month */
<<<<<<< 2c7a050fb24442dd4b0c96d5091c13297b10068a
<<<<<<< 2c7a050fb24442dd4b0c96d5091c13297b10068a
$Month = array( 'January' => 31, 'February ' => 28, 'March' => 31, 'April' => 30, 'May' => 31, 'June' => 30, 'July' => 31, 'August' => 31, 'September' => 30, 'October' => 31, 'November' => 30, 'December' => 31);
=======
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
>>>>>>> aa
=======
$Month = array( 'January' => date("t"), 'February' => date("t"), 'March' => date("t"), 'April' => date("t"), 'May' => date("t"), 'June' => date("t"), 'July' => date("t"), 'August' => date("t"), 'September' => date("t"), 'October' => date("t"), 'November' => date("t"), 'December' => date("t"));
>>>>>>> suit
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
foreach ($Month as $item => $value) {
    echo $item, ' ' ,$value,' ';
}
$choseMont = date("F", mktime(0, 0, 0, $currentMonth +1, 0, 0));
echo $choseMont;
$first_daysMont = date("w", mktime(0, 0, 0, $_GET['month'], 1, $_GET['year']));

foreach ($Month as $item => $value) {
    if ($item == $choseMont) {
        $nbDays = $value;
    }
}
/**echo "<br>", $current_date, $choseMont, $currentYear, $nbDays;
*/

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
                        href="Arrays_String.php?month=<?php echo $currentMonth - 1; ?>,year=<?php echo $currentYear; ?>">
                    <button value="Precedent">Precedent</button>
                </a>&nbsp;&nbsp;
            </li>


            <?php echo $currentYear ?>  <br>
            <span style="font-size:18px"><?php  echo $choseMont ?>  </span>
            <li class="next"><a
                    href="Arrays_String.php?month=<?php echo $currentMonth + 1; ?>,year=<?php echo $currentYear; ?>">
                    <button >Suivant</button>
                </a>&nbsp;&nbsp;</li>
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
    $num_date = 0;
    for ($i = 1; $i <= $nbDays + $first_daysMont - 1; $i++) {
        if ($i < $first_daysMont) {
            echo "<li> </li>";
        } else {
            $num_date++;
            if ($num_date == $current_date) {

                echo "<li><span class='active'> $num_date </span></li>";

            } else
                echo "<li>$num_date</li>";

        }
    }
    ?>


</ul>

</body>

</html>