<?php
$arr = [1,2,3,7,8,4];
$a = 4;
foreach($arr as $key => $val) {
    if($a==$val) {
        unset($arr[$key]);
       
    }
}

print_r($arr);