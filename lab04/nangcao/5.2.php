<?php
$arr= array();
$r = array("id"=> "sp1", "name"=> "Sản phẩm 1 ");
$arr[] = $r;
$r = array("id"=> "sp2", "name"=> "Sản phẩm 2 ");
$arr[] = $r;
$r = array("id"=> "sp3", "name"=> "Sản phẩm 3 ");
$arr[] = $r;

?>

<table border="1">
    <tr>
        <td>STT</td>
        <td>Ma san pham</td>
        <td>Ten san pham</td>
    </tr>
    <?php foreach($arr as $key => $val):  ?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $val['id']?></td>
            <td><?php echo $val['name']?></td>
        </tr>
    <?php endforeach  ?>
</table>