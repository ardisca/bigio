<?php
$kaku = array(1, 2, 3, 4, 5);
$n = count($kaku);
 
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $kaku[$j];
    }
    for($j=$n-1;$j>$i;$j--){
        print " ";
    }
    for($j=$n-2;$j>$i;$j--){
        print " ";
    }
    if($i != $n-1){
        for ($l = $i; $l >= 0; $l--) {
            echo $kaku[$l];
        }
    }
    else{
        for ($l = $i; $l >= 1; $l--) {
            echo $kaku[$l-1];
        }
    }
    
    echo PHP_EOL;
} 

for ($i = $n - 2; $i >= 0; $i--) { 
    for ($j = 0; $j <= $i; $j++) {
        echo $kaku[$j];
    }

    for($j=$n-1;$j>$i;$j--){
        print " ";
    }
    for($j=$n-2;$j>$i;$j--){
        print " ";
    }
    
    for ($l = $i; $l >= 0; $l--) {
        echo $kaku[$l];
    }

    echo PHP_EOL;
}
?>
