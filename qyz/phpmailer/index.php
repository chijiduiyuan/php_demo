<!DOCTYPE html>
<html>
<head>
    <title>邮件发送</title>
    <meta charset='utf8'/>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#add").click(function(){
                var html='<span>接收人邮箱:<input type="text" name="tomail[]" /><br/><br/></span>';
                $("#email").prepend(html);
            });
        });

    </script>
</head>
<body>
      <input type="button" id="add" value="增加收件人" />
    <form  method="post" action="main_check.php" id="email">
        <span>
        接收人邮箱:<input type="text" value="1043170761@qq.com" name="tomail[]" /><br/><br/></span>
        邮件标题:<input type="text" name="title" /><br/><br/>
        邮件主题:<textarea name="content"></textarea><br/><br/>
        手机号码:<input type="text" name="tel" /><br/><br/>
        <input type="submit" value="提交" />
    </form>

</body>
</html>