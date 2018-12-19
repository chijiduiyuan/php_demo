<?php
header("Content-type: text/html; charset=utf-8;");
error_reporting(0);
include_once("./WxPayPubHelper/WxPayPubHelper.php");
session_start();

//使用jsapi接口
$jsApi = new JsApi_pub();

//=========步骤1：网页授权获取用户openid============
//通过code获得openid
if (!isset($_GET['code'])) {//没有获取到code值,启用微信获取code
    $_SESSION['weixin'] = array(
        'subject' => $_GET['subject'],
        'total_fee' => $_GET['total_fee'] * 100,
        'out_trade_no' => $_GET['out_trade_no']
    );

    //file_put_contents("pay.txt", json_encode($_SESSION['weixin']));//测试写的日志
    //触发微信返回code码
    $url = $jsApi->createOauthUrlForCode(WxPayConf_pub::JS_API_CALL_URL);
    Header("Location: $url");
    exit;
} else {//通过code换取 access_token(和接口access_token不同),同时获取openid
    // 判断session中是否有值
    // $tmp = file_get_contents('pay.txt');//测试写的日志
    //$_SESSION['weixin'] = json_decode($tmp, true);//测试写的日志
    if (empty($_SESSION['weixin'])){
        exit('<br><br><br> <center style="font-size:50px;padding:50px">订单已失效</center> <br> <center style="font-size:50px;padding:50px"><a href="javascript:history.go(-1);">【返回】</a></center>');
    }
    //通过code码，获取openid
    $code = $_GET['code'];
    $jsApi->setCode($code);
    $openid = $jsApi->getOpenId();
}
//=========步骤2：使用统一支付接口，获取prepay_id============
//使用统一支付接口
$unifiedOrder = new UnifiedOrder_pub();

$unifiedOrder->setParameter("openid", $openid); //openid
$unifiedOrder->setParameter("body", $_SESSION['weixin']['subject']); //商品描述
//自定义订单号，此处仅作举例
$timeStamp = time();
//$out_trade_no = WxPayConf_pub::APPID."$timeStamp";
$unifiedOrder->setParameter("out_trade_no", $_SESSION['weixin']['out_trade_no']); //商户订单号 
$unifiedOrder->setParameter("total_fee", $_SESSION['weixin']['total_fee']); //总金额
$unifiedOrder->setParameter("notify_url", WxPayConf_pub::NOTIFY_URL); //通知地址 
$unifiedOrder->setParameter("trade_type", "JSAPI"); //交易类型


unset($_SESSION['weixin']);

$prepay_id = $unifiedOrder->getPrepayId(); //获取prepay_id
if (!$prepay_id)
    exit('<br><br><br> <center style="font-size:50px;padding:50px">订单已过期</center> <br> <center style="font-size:50px;padding:50px"><a href="javascript:history.go(-1);">【返回】</a></center>');

//=========步骤3：使用jsapi调起支付============
$jsApi->setPrepayId($prepay_id);

$jsApiParameters = $jsApi->getParameters();
//echo $jsApiParameters;
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        <title>微信安全支付</title>

        <script type="text/javascript">

            //调用微信JS api 支付
            function jsApiCall()
            {
                WeixinJSBridge.invoke(
                        'getBrandWCPayRequest',
                      <?php echo $jsApiParameters; ?>,
                        function (res) {
                            // alert(res.err_code+res.err_desc+res.err_msg);//显示错误
                            if (res.err_msg == "get_brand_wcpay_request:ok") {
                                //支付成功后,执行跳转到指定页面
                                location.href = '/index.php/Home/Weixin/cplist/';
                            }
                            if (res.err_msg == "get_brand_wcpay_request:cancel") {
                                //location.href = '';
                            }
                        }
                );
            }

            function callpay()
            {


                if (typeof WeixinJSBridge == "undefined") {
                    if (document.addEventListener) {
                        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                    } else if (document.attachEvent) {
                        document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                    }
                } else {
                    jsApiCall();
                }
            }
        </script>
    </head>
    <body onload="callpay()">
        </br></br></br></br>
        <div align="center">
            <button style="width:210px; height:50px; background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white; display: none; font-size:20px; " type="button" onClick="callpay()">支付</button>
        </div>
    </body>
</html>