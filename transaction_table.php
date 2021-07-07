<?php

$data = $transaction["data"];
foreach ($data as $temp){
    echo "<tr> <td scope='col'>".$temp['id']."</td>";
    echo "<td scope='col'>".$temp['type']."</td>";
    echo "<td scope='col'>".$temp['amount']." ".$temp['currency']."</td>";
    echo "<td scope='col'>".date('r', $temp['created_at'])."</td>";
    echo "<td scope='col'>".$temp['status']."</td> </tr>";
}

?>