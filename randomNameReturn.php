<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json; charset=utf-8');
require "./core/mysql_core.php";
$conn = mysqlConnect();
$stu_id = mt_rand(1, 49);
$res = false;
if(listCnt($conn, 'protectList') == 0){
    switch ($stu_id){
        case 1:
            $res = '赵佳晨';
            break;
        case 2:
            $res = '冯钰荃';
            break;
        case 3:
            $res = '张芮诚';
            break;
        case 4:
            $res = '秦一铭';
            break;
        case 5:
            $res = '唐子媛';
            break;
        case 6:
            $res = '崔瑾';
            break;
        case 7:
            $res = '黄昊';
            break;
        case 8:
            $res = '马乐腾';
            break;
        case 9:
            $res = '徐乐';
            break;
        case 10:
            $res = '王晟宇';
            break;
        case 11:
            $res = '郑亿坤';
            break;
        case 12:
            $res = '李林烜';
            break;
        case 13:
            $res = '胡英距';
            break;
        case 14:
            $res = '徐秋硕';
            break;
        case 15:
            $res = '王一宽';
            break;
        case 16:
            $res = '王建峰';
            break;
        case 17:
            $res = '张钧凯';
            break;
        case 18:
            $res = '牛湛坤';
            break;
        case 19:
            $res = '庄智超';
            break;
        case 20:
            $res = '段元婧';
            break;
        case 21:
            $res = '赵子墨';
            break;
        case 22:
            $res = '化雨涵';
            break;
        case 23:
            $res = '朱东润';
            break;
        case 24:
            $res = '武帅宇';
            break;
        case 25:
            $res = '史杰';
            break;
        case 26:
            $res = '王绍丞';
            break;
        case 27:
            $res = '李静';
            break;
        case 28:
            $res = '卢佳慧';
            break;
        case 29:
            $res = '田闯';
            break;
        case 30:
            $res = '田秉正';
            break;
        case 31:
            $res = '徐瑞阳';
            break;
        case 32:
            $res = '孙圣博';
            break;
        case 33:
            $res = '李宗岳';
            break;
        case 34:
            $res = '主文君';
            break;
        case 35:
            $res = '颜琪';
            break;
        case 36:
            $res = '程琪惠';
            break;
        case 37:
            $res = '吴畏';
            break;
        case 38:
            $res = '刘汉钦';
            break;
        case 39:
            $res = '王海萍';
            break;
        case 40:
            $res = '李景裕';
            break;
        case 41:
            $res = '付旭冉';
            break;
        case 42:
            $res = '黄铄';
            break;
        case 43:
            $res = '刘一君';
            break;
        case 44:
            $res = '邵珈琪';
            break;
        case 45:
            $res = '周玥廷';
            break;
        case 46:
            $res = '王泓力';
            break;
        case 47:
            $res = '李剑南';
            break;
        case 48:
            $res = '马铭阳';
            break;
        case 49:
            $res = '杨凯';
            break;
        default:
            $res = 'ERROR!';
    }

}
$callback = $_GET['callback'];
echo $callback.'('.json_encode($res).')';