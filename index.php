<?php

$startDate=readline('start date:');
$endDate=readline('end date:');
// echo strtotime($startDate);
function dayCountCalculation($startDate,$endDate){
    $diff = strtotime($endDate) - strtotime($startDate);

    return abs(round($diff / 86400));

    
}

 $daycount=dayCountCalculation($startDate,$endDate);

    if($daycount<=1){
        echo $daycount,"-day";
    }
    else{
        echo $daycount,"-days";
    }

?>
