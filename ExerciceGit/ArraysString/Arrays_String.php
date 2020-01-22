<?php
/**
 * ICT133_PHP - arrays_string.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 09.12.2019
 */

date_default_timezone_set('UTC');

/** @var TYPE_NAME $Month this array content all month of year and count for the month */
$Month = array( 'January' => date("t"), 'February' => date("t"), 'March' => date("t"), 'April' => date("t"), 'May' => date("t"), 'June' => date("t"), 'July' => date("t"), 'August' => date("t"), 'September' => date("t"), 'October' => date("t"), 'November' => date("t"), 'December' => date("t"));
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
foreach ($date as $item) {
    echo $item, ' ' ,$currentMonth,' ';
}
$choseMont = date("F", mktime(0, 0, 0, $currentMonth, 0, 0));
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
                    <button value="Precedent"></button>
                </a>&nbsp;&nbsp;
            </li>


            <?php echo $choseMont ?><br>
            <span style="font-size:18px"><?php ?></span>
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