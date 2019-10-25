<?php
require "./config/mysql_config.php";

function mysqlConnect(){
    $conn = new mysqli(MYSQL_HOST, MYSQL_USER_NAME, MYSQL_PASSWORD);
    if (!$conn) {
        return false;
    }
    mysqli_query($conn, "set names utf8");
    mysqli_select_db($conn, MYSQL_DB_NAME);
    return $conn;
}

function listCnt($conn, $list){
    $sql = "SELECT count(*) FROM {$list}";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_row($result);
    $rowcount = $rows[0];
    return $rowcount;
}

function weightNameSelect($conn){
    $weight = array();
    $sql = "SELECT * FROM nameList";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $weight[$row['id']] = $row['weight'];
    }
    return $weight;
}

function idNameSelect($conn, $id){
    $sql = "SELECT * FROM nameList where id = {$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $row['name'];
}