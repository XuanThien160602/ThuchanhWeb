
<?php
// Danh sách các câu hỏi trắc nghiệm ban đầu
$cauHoi =[];
for($i=1 ;$i<=20 ; $i++) {
    $ch = 'Cau hoi so '.$i;
    array_push($cauHoi, $ch);
}

$n = count($cauHoi);

// Số lượng câu hỏi muốn lấy ngẫu nhiên
$m = 5; 

$deThi = array();
$index = array_rand($cauHoi, $m);

foreach ($index as $i) {
    $deThi[] = $cauHoi[$i];
}   

// In ra đề thi
echo "<h1>Đề thi trắc nghiệm</h1>";
foreach ($deThi as $key => $cau) {
    echo ($key + 1) . ". " . $cau . "<br>";
}
?>