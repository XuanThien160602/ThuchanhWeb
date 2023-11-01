<?php
$a = [1,-4,-3-7,8,6,4];
$b=[];
$dem=0;
foreach($a as $key => $val) {
    if($val>0) {
        $dem++;
        array_push($b, $val);
    }
}

echo 'So phan tu duong: '.$dem.'<br>';
print_r($b);