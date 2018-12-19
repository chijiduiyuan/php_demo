<?php
header("Content-type: text/html; charset=utf-8;");
date_default_timezone_set("PRC");
error_reporting(0);
include_once("./log_.php");
include_once("./WxPayPubHelper/WxPayPubHelper.php");
//回调程序，用于更改订单状态
//echo $config['POINT_GET'];
//使用通用通知接口
$notify = new Notify_pub();

//存储微信的回调
//验证签名，并回应微信。
//对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
//微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
//尽可能提高通知的成功率，但微信不保证通知最终能成功。
$xml = file_get_contents('php://input');
$notify->saveData($xml);

if ($notify->checkSign() == FALSE) {
    $notify->setReturnParameter("return_code", "FAIL"); //返回状态码
    $notify->setReturnParameter("return_msg", "签名失败"); //返回信息
} else {
    $notify->setReturnParameter("return_code", "SUCCESS"); //设置返回码
}
$returnXml = $notify->returnXml();

//以log文件形式记录回调信息
$log_ = new Log_();
$log_name = "./notify_url.log"; //log文件路径
//$log_->log_result($log_name,"【接收到的notify通知】:\n".$xml."\n");

if ($notify->checkSign() == TRUE) {
    if ($notify->data["return_code"] == "FAIL") {
        //出错
        //$log_->log_result($log_name,"【通信出错】:\n".$xml."\n");
        //file_put_contents("2.txt", "fail");
        exit('FAIL');
    } elseif ($notify->data["result_code"] == "FAIL") {
        //出错
        //$log_->log_result($log_name,"【业务出错】:\n".$xml."\n");
        //file_put_contents("2.txt", "fail");
        exit('FAIL');
    } else {
        //验证成功,
        //获取微信通知参数(XML格式手册:https://pay.weixin.qq.com/wiki/doc/api/jsapi.php?chapter=9_7)

        $sn = $notify->data["out_trade_no"]; //商户订单号
        $total = $notify->data["total_fee"]; //已付款金额
        //此处应该更新一下订单状态，商户自行增删操作
        //连接数据库
        $pdo = new PDO("mysql:host=localhost;dbname=user2", "user2", "538976");
        $pdo->query("set names utf8");
        $re = $pdo->query("SELECT * FROM orders WHERE sn='" . $sn . "'");
        $row = $re->fetch(); //取一行数据
        if ($row) {
            if ($row['status'] == 1 && $row['total'] == ($total / 100)) {
                $pdo->exec("UPDATE orders SET status=2 WHERE sn='" . $sn . "'");
                exit('SUCCESS');
            }
        }
        exit('FAIL');
    }
}
?>