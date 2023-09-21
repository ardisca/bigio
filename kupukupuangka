<?php

$arrayAngka=array(1,2,3,4,5);

$jumlahArray=count($arrayAngka)-2;
$jumlahArray1=(count($arrayAngka))-1;

for($k=0;$jumlahArray1>=$k;$k++){
    for($i=1;$k+1>=$i;$i++){
            print($i);
    }
    for($i=$jumlahArray1;$k<$i;$i--){
            print(' ');
    }
    for($i=$jumlahArray1-1;$k<$i;$i--){
            print(' ');
    }
    
    $newarray=array();
    
    for($i=0;$i<=$k;$i++){
     array_unshift($newarray,$arrayAngka[$i]);
    }
   
   $variabel=$newarray; 
   array_shift($variabel);
    if($k==$jumlahArray1){
    for($i=0;$i<$k;$i++){
     print($variabel[$i]);
    }
    // print('asa');
 }else{
    for($i=0;$i<=$k;$i++){
     print($newarray[$i]);
    } 
 }
    
    
 
    echo "\n";
}
for($k=1;$k<=$jumlahArray1;$k++){
    for($i=0;$i<=$jumlahArray1-$k;$i++){
        print($arrayAngka[$i]);
    }
       $newarray=array();
    
    for($i=0;$i<=$k;$i++){
     array_unshift($newarray,$arrayAngka[$i]);
    }
    
    for($i=1;$i<=$k;$i++){
     print(' ');
    }
     for($i=2;$k>=$i;$i++){
            print(' ');
    }
        $newarray=array();

      for($i=0;$i<=$jumlahArray1-$k;$i++){
        // print($arrayAngka[$i]);
             array_unshift($newarray,$arrayAngka[$i]);

    }
      for($i=0;$i<=$jumlahArray1-$k;$i++){
        print($newarray[$i]);
            //  array_unshift($newarray,$arrayAngka[$i]);

    }
 
    echo "\n";
}


?>
