<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller {
	
	public function mail(){
		$mail = new \Common\Util\PHPMailer();
		$mail->IsSMTP(); // 使用SMTP方式发送
		$mail->CharSet='UTF-8';// 设置邮件的字符编码
		$mail->Host = 'smtp.qq.com'; // 您的企业邮局服务器
		//$mail->Port = 25; // 设置端口
		$mail->SMTPAuth = true; // 启用SMTP验证功能
		$mail->Username = 'dragondean@qq.com'; // 邮局用户名(请填写完整的email地址)
		$mail->Password = ""; // 邮局密码
		$mail->From = 'dragondean@qq.com'; //邮件发送者email地址
		$mail->FromName = "阿拉丁龙哥";
		$mail->AddAddress('987332767@qq.com', '龙哥');//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
		
		$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
		$mail->Subject = '我就是试试';//"PHPMailer测试邮件"; //邮件标题
		$mail->Body = "<b>I am a 阿拉丁龙哥 !</b>"; //邮件内容
		if(!$mail->Send())
		{
			echo "邮件发送失败. <p>";
			echo "错误原因: " . $mail->ErrorInfo;
		}else{
			echo "发送成功了,嘛嘛再也不担心我不会发邮件了!";
		}
	}
}