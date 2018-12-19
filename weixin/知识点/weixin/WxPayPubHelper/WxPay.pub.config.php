<?php
/**
 * 	配置账号信息
 */
class WxPayConf_pub {
    //=======【基本信息设置】=====================================
    //开发者ID,公众号平台(mp.weixin.qq.com)基本配置中 查看。
    const APPID = 'wx6cd7df4ea236f12f';
    //应用 秘钥 在公众号平台(mp.weixin.qq.com)基本设置中 查看
    const APPSECRET = '8923fdc46db47b98213e855ae97688f5';
    //商户号，身份标识,审核通过后，在微信发送的邮件中查看
    const MCHID = '1288120501';
    //商户支付密钥Key。审核通过后，pay.weixin.qq.com 页面账号中心-->API安全(需要安装证书)-->设置秘钥
    const KEY = 'sfedsfsdfsd32423423432432sdfsdfs';

    //
    //JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看
    //=======【JSAPI路径设置】===================================
    //获取access_token过程中的跳转uri，通过跳转将code传入jsapi支付页面
    const JS_API_CALL_URL = 'http://user2.my-item2.com/weixin/js_api_call.php';
    //=======【证书路径设置】=====================================
    //证书路径,注意应该填写绝对路径
    const SSLCERT_PATH = '';
    const SSLKEY_PATH = '';
    //=======【异步通知url设置】===================================
    //异步通知url，商户根据实际开发过程设定
    const NOTIFY_URL = 'http://user2.my-item2.com/weixin/notify_url.php';
    //=======【curl超时设置】===================================
    //本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
    const CURL_TIMEOUT = 30;

}
?>