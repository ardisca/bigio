<?php
$input='phobia';
$inputArray=str_split($input);
$balik=count($inputArray)-2;

for($i=0;count($inputArray)>$i; $i++){
    print($inputArray[$i]);
}
for($i=0;$balik>=$i; $i++){
    print($inputArray[$balik-$i]);
}
?>
