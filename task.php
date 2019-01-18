<link rel="stylesheet" href="style.css">
<?php

//Seperating array into just numbers
$num = $_POST['numbers'];

$seperated = explode (",", $num);
//print_r($seperated);

foreach($seperated as $n){
    if ($n % 2 == 0){
        $even[] = $n;
        $map[$n] = 1;
    }
}
echo '<hr />';
print_r($map);
echo '<hr />';

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

$n=0;
echo "<table><tr></tr>";
for($i=0;$i<$size;$i++){
    echo "<tr>";
    for($j=0;$j<$size;$j++){
            ++$n;
        if($map[$n] === 1){
            if($n==$bold){
                echo "<td><b>", $bold,"</b></td>";
            }
            else {
                $checker = $n;
                echo "<td>", $checker, "</td>";
            }
        }
        else {
            echo "<td>","</td>";
        }

    }
    echo "<tr>";
}
echo "</table>";