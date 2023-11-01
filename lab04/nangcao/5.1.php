<?php

function showArray($arr) {
    echo ' 
    <table border="1">
    <tr>
        <td>Index</td>
        <td>Value</td>
    </tr>';
    foreach($arr as $key => $val) {
        echo '
        <tr>
            <td>'.$key.'</td>
            <td>'.$val.'</td>
         </tr>
        ';
    }
    echo '</table>';
}

showArray([1,6,9,3]);   