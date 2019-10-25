<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json; charset=utf-8');
require "./core/mysql_core.php";
$conn = mysqlConnect();
$weight = weightNameSelect($conn);
$weightSum = 0;
$listCnt = listCnt($conn, 'nameList');
$j = 1;
$weightRand = array();
for($i = 1; $i <= $listCnt; $i++){
    $weightSum += $weight[$i];
    for($k = 1; $k <= $weight[$i]; $j++, $k++){
        $weightRand[$j] = $i;
    }
}
$res = idNameSelect($conn, $weightRand[mt_rand(1, $weightSum)]);
mysqli_close($conn);
$callback = $_GET['callback'];
echo $callback.'('.json_encode($res).')';