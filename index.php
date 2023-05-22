<?php

$startDate=readline('start date:');
$endDate=readline('end date:');
// echo strtotime($startDate);
function dayCountCalculation($startDate,$endDate){
    $diff = strtotime($endDate) - strtotime($startDate);
    return abs(round($diff / 86400));
}

 $daycount=dayCountCalculation($startDate,$endDate);
 echo ($daycount<=1) ? $daycount.":day":  $daycount.":days";

?>
