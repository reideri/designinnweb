<?php 

	class MailController {
		static public SendEmail($to, $title, $message, $headers){
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= 'From: Cobranza<cobranzas@designinnweb.com>';
			mail($to, $title, $message, $headers);
		}
	}