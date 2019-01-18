<link rel="stylesheet" href="style.css">
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

echo '<hr />';
$max = max($seperated);
echo $max;


echo '<hr />';
$size = ceil(sqrt($max+1));

echo $size;

echo '<hr />';

echo "<table><tr></tr>";
for($i=0;$i<$size;$i++){
    echo "<tr>";
    for($j=0;$j<$size;$j++){
        echo "<td>{$j}</td>";
    }
    echo "<tr>";
}
echo "</table>";