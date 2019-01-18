<?php

//Seperating array into just numbers
$num = $_POST['numbers'];

$seperated = explode (",", $num);
print_r($seperated);

