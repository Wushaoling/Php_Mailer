<?php
	include_once 'class.phpmailer.php';
	
	echo sendMail(dest address);
	
	/*·¢ËÍÓÊ¼þ*/
	function sendMail($to){
		try {
			$mail = new PHPMailer(true); 
			$mail->IsSMTP();
			$mail->CharSet='UTF-8'; 
			$mail->SMTPAuth   = true;
			$mail->Port       = 25;                    
			$mail->Host       = "smtp.126.com"; 
			$mail->Username   = "your smtp username";    
			$mail->Password   = "your smtp password";            
			$mail->IsSendmail(); 
			$mail->From       = "your mail";
			$mail->FromName   = "your name";
			$mail->AddAddress($to);
			$mail->Subject  = "subject";
			$mail->Body = "content";
			$mail->IsHTML(false); 
			if(!$mail->Send()){
				return false;
			}
			return true;
		}catch (phpmailerException $e) {
			return false;
		}
	}
?>