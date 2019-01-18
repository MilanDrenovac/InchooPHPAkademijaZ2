<?php

//Seperating array into just numbers
$num = $_POST['numbers'];

$seperated = explode (",", $num);
//print_r($seperated);

foreach($seperated as $n){
    if ($n % 2 == 0){
        $even[] = $n;
    }
}

sort($even);
print_r($even);
echo '<hr />';
print_r($seperated);
$mean = array_sum($seperated) / count($seperated);
echo $mean;

foreach($even as $bold){
    if ($bold > $mean) {
        echo '<b>', $bold, '</b>';
        break;
    }
}
