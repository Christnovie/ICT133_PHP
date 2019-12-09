<?php
/**
 * ICT133_PHP - arrays_string_v1.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 09.12.2019
 */
$days= 7;
$weeks = 5;
$numDays = 1;
$TabArrays[$weeks][$days] =array();
$TabDays = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

?>
<!DOCTYPE html >

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays_string_v1</title>

</head>
<body>
    january<br>
    <table>
        <tr>
            <th>
                <?php
        for ($i = 0 ;$i< $days - 1;$i++){
            echo $TabDays[$i] ;


        }
        ?>
            </th>
        </tr>
        <tr>
            <td >
        <?php
        for($i = 0;$i < $weeks ; $i++){
            echo '<td>';
            for ($a = 0;$a < $days;$a++){
                $TabArrays[$i][$a] = $numDays;
                $bgcolor = (($i + $a)%2 == 0)?"#FFFFFF":"#558BC5";

                if($numDays <= 31){
                    echo $TabArrays[$i][$a];

                }


                $numDays = $numDays + 1;
            }
            echo ('<br>');
        }



        ?>
            </td>
        </tr>
    </table>
</body>

</html>

