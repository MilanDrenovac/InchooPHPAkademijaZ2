<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 2</title>
</head>
<body>
<?php
//Seperating array into just numbers
$num = $_POST['numbers'];

$seperated = explode (",", $num);
//print_r($seperated);

foreach($seperated as $n){
    if (!is_numeric($n)){
        echo "<p>This is not a number, please input valid numbers<p>";
        exit();
    }
    if ($n % 2 == 0){
        $even[] = $n;
        $map[$n] = 1;
    }
}
//echo '<hr />';
//print_r($map);
//echo '<hr />';

sort($even);
//print_r($even);
//echo '<hr />';
//print_r($seperated);
$mean = array_sum($seperated) / count($seperated);
//echo $mean;

foreach($even as $bold){
    if ($bold > $mean) {
        //echo '<b>', $bold, '</b>';
        break;
    }
}

//echo '<hr />';
$max = max($seperated);
//echo $max;


//echo '<hr />';
$size = ceil(sqrt($max+1));

if ($_POST['AllowBig'] == 'No' ){
  echo "Going back to starting page...<meta http-equiv=\"refresh\" content=\"1; url=/Z2\" />";
  exit();
}
if ($_POST['AllowBig'] != 'Yes' ){
    if ($size >= 200){
        echo "Datasize too big sorry! Please select if you want to continue?";
        echo <<<HERE
    <form action="task.php" method="post">
    <input type="submit" name="AllowBig" value="Yes">
    <input type="submit" name="AllowBig" value="No">
     <input type="hidden" name="numbers" value="$num">
    </form>
HERE;
        exit();
    }
}




//Technically this works better considering a if you input 4 it gives you a proper 2x2 table instead of 3x3 table?
//$size = ceil(sqrt($max));

//echo $size;

//echo '<hr />';

$n=0;
echo "<table>";
for($i=0;$i<$size;$i++){
    echo "<tr>";
    for($j=0;$j<$size;$j++){
        ++$n;
        echo "<td>";
        if($map[$n] === 1){
            if($n==$bold){
                echo "<b>", $bold,"</b>";
            }
            else {
                echo $n;
            }
        }
        echo "</td>";


    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>