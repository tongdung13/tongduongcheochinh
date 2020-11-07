<?php

$mang = array(
    array(2,3,4,5,6),
    array(9,3,2,1,6),
    array(0,2,1,6,7),
    array(1,5,7,9,5),
    array(6,2,4,8,6)
);

$sum = 0;

for ($i = 0; $i < count($mang); $i++){
    for ($j = 0; $j <count($mang[$i]); $j++){
        if ($i == $j) {
            $sum += $mang[$i][$j];
        }
    }
}
echo "tong duong cheo chinh: " .$sum. "<br><br>" ;

//$tong = 0;
//dang sai can chinh sua
//for ($i = 0; $i < count($mang); $i++){
//    for ($j = 0; $j < count($mang[$i]); $j++){
//        if ($j + $i = count($mang) - 1) {
//            $tong += $mang[$i][$j];
//        }
//    }
//}
//
//echo "tong duong cheo phu: ". $tong;
