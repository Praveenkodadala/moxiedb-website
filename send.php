<?php
//ini_set('display_errors', 1);
require_once("mailer/class.phpmailer.php");
require_once('mailer/class.smtp.php');

		$user_email=$_POST['email'];

		$link='Dear Concern, <br>Please find my email address'.'<br><br>'.$user_email;  
		$mailer=new PHPMailer;
		$mailer->IsSMTP();
		$mailer->isHtml(true);
		$mailer->SMTPDebug  =1;
		$mailer->SMTPAuth   = true;
		$mailer->Host       = "smtp.gmail.com";
		$mailer->SMTPSecure = "ssl";
		$mailer->Port       = 465;
		$mailer->Username   = "reporting@varnatech.com";//"reporting@varnatech.com";
		$mailer->Password   = '$epo1234';//'$epo1234';
		$mailer->FromName ="moxieDB";
		$mailer->From =$user_email;
		//$mailer->AddAddress('venky242526@gmail.com');
		$mailer->AddAddress('hello@moxiedb.com');
		$mailer->Subject ='moxieDB' ;
		$mailer->Body = nl2br($link);

		$a=$mailer->Send();
		if($a){
		  echo "success";
		}else{
		  echo "failed";
		}
?>
