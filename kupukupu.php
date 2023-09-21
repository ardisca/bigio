<?php
$arr = array(1,2,3,4,5);
for($i=0; $i<count($arr); $i++){
    for($j=0; $j<=$i; $j++){
        print $arr[$j];
    }
    for($j=count($arr)-1;$j>$i;$j--){
        print " ";
    }
    for($j=count($arr)-2;$j>$i;$j--){
        print " ";
    }
    $newArr = [];
    for($j=0; $j<=$i; $j++){
        array_unshift($newArr, $arr[$j]);
    }
    $newArr2 = $newArr;
    array_shift($newArr2);
    if($i != count($arr)-1){
        for($j=0; $j<=$i; $j++){
            print $newArr[$j];
        }
    }else{
        for($j=0; $j<$i; $j++){
            print $newArr2[$j];
        }
    }
    print "\n";
}

$counter = count($arr)-1;
for($i=1; $i<count($arr); $i++){
    for($j=0; $j<count($arr)-$i; $j++){
        print $arr[$j];
    }
    for($j=1; $j<=$i; $j++){
        print " ";
    }
    for($j=2; $j<=$i; $j++){
        print " ";
    }
    $newArr = [];
    for($j=0;$j<$counter;$j++){
        array_unshift($newArr, $arr[$j]);
    }
    for($j=0;$j<$counter;$j++){
        print $newArr[$j];
    }
    $counter--;
    print "\n";
}
?>
