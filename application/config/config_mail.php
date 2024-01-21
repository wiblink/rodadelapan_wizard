<?php

include_once("phpmailer/PHPMailerAutoload.php");
class mailer{

	function sendmail($email,$name,$subject,$body,$success_msg="",$error_msg="",$path = array()){
		$flag_mail=0;
Jakarta Airport Halim Perdanakusuma
		
		$mail = new PHPMailer();
		
		$mail->IsSMTP(true); // telling the class to use SMTP
		//$mail->Host       = "ssl://smtp.gmail.com:465"; // SMTP server
		$mail->SMTPDebug  = 1;  
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Host = 'ssl://smtp.gmail.com:465';
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
		$mail->Username   = "wibi.wb@gmail.com";  // GMAIL username
		$mail->Password   = "alphaproximacentauribetelgeuse";            // GMAIL password
		
		//$mail->SMTPSecure = 'tls';            // GMAIL password
		$mail->SetFrom('no-reply@zaplowestcar.com', 'PHIRO');

		
		//$body             = eregi_replace("[\]",'',$body);	
		//$f->pre($email);
		#$rs_mail=$m->sendmail($email,$name,$subject,$content,$success_msg,$error_msg);
		$mail->Subject = $subject;
		$mail->MsgHTML($body);
		$mail->AddAddress($email, $name);
		foreach ($path as $key => $val) {
			if (!empty($val)) {
				$mail->addAttachment($val);
			}
		}
		if($mail->Send()) {
			$output= "	<tr>
							<td valign=top align=center style=padding-top:20px; >
								<div class=clear style='margin-top:25px;'></div>
								<div class='warp'>
									<center>
										<table style='width:300px;border:2px solid #52db05;margin-top:50px;' >
											<tr>
												<td valign=top ><img src=/i/button_correct.png></td>
												<td>
													SUKSES:<ul>$success_msg</ul>
													<a href=# onClick=history.back(-1);>Kembali</a>
												</td>
											</tr>
										</table>
									</center>
								</div>
	                        </td>
	                    </tr>";
		}else{
			$flag_mail=1;
			$output= "	<tr>
							<td valign=top align=center style=padding-top:20px; >
								<div class=clear style='margin-top:25px;'></div>
								<div class='warp'>
									<center>
										<table style='width:300px;border:2px solid #C00000;' >
											<tr>
												<td valign=top ><img src=/i/stop.png></td>
												<td>
													MAILER ERROR:
													<ul>
														$error_msg
														<li>".$mail->ErrorInfo."</li>
													</ul>
													<a href=# onClick=history.back(-1);>Kembali</a>
												</td>
											</tr>
										</table>
									</center>
								</div>
							</td>
						</tr>";

		}
		$output_array['flag_mail']=$flag_mail;
		$output_array['output_mail']=$output;
		#$f->pre($output_array);
		return $output_array;
	}
}
?>
