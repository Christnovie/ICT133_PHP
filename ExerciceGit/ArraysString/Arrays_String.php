<?php
/**
 * ICT133_PHP - arrays_string.php
 *version : 1.0
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 09.12.2019
 */
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
$date = array(date('j'),date('F'),date('Y'),date()) ;
$days = $date[0];
$dataMont = $date[1];
$nowYear =$date[2];
$f = 0;

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
            <li class="prev"><a href="arrays_string.php" id =  <?php
              if($f == 1) {
                  $nowMonth = $dataMont;
              }else {
                for ($i = 0;$i < 12 ;$i++){

                    if($Month[$i] == $nowMonth) {
                        $nowMonth = $Month[$i - 1];
                    }
                }}
                ?>> &#10094;</a></li>

            <?php echo $nowMonth ?><br>
            <span style="font-size:18px"><?php echo $nowYear ?></span>
            <li class="next"><a>&#10095;</a></li>
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
    for($i = 1;$i <= 35;$i++){

        if($i == $days){
            echo"<li><span class='active'>$i</span></li>";
            $numValid++;
        }
        else
            if()
            echo"<li>$i</li>";


    }
?>



</ul>

</body>

</html>