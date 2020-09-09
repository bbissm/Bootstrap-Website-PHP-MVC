<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// class contact extends module{
// 	public function getContact()
// 	{
// 		if($_POST["submit"] != ""){
// 			$this->db->query("INSERT INTO tbl_contact (name,email,message) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')");
// 			echo $this->db->error;
// 			file_put_contents("data.log", print_r($_POST,true));
// 			//$this->mailer();
// 			//header("Location: /");

// 		}else{
// 			echo "Bitte füllen Sie alle Felder aus";
// 		}

// 	}
// 	public function mailer()
// 	{
// 		    try {
//             // Init PHP-Mailer
//             $mail = new PHPMailer(true);
//             $mail->SMTPDebug = 0;
//             $mail->isSMTP();
//             $mail->Host = 'smtp.virtualtec.ch';
//             $mail->SMTPAuth = true;
//             $mail->Username = /*'sender@live.dimaster.ch'*/;
//             $mail->Password = 'kmlktfkr';
//             $mail->SMTPSecure = 'tls';
//             $mail->Port = 587;
//             $mail->CharSet = "UTF-8";
//             $mail->WordWrap = 50;

//             $mail->setFrom(/*'no-reply@migros-integrart2019.dev.dimaster.ch', 'Symposium 2019'*/);
//             $mail->AddAddress($values['mail']);
//             $mail->Subject = translation::get("sign_up_mail_subject");

//             $mail->IsHTML(true);

//             $mail->Body = "
//             <html>
//                 <head>
//                     <title>Symposium 2019</title>
//                 </head>
//                 <body>
//                     <div>
//                         test
//                     </div>
//                 </body>
//             </html>";
//             $mail->send();
//             return true;
//         } catch(phpmailerException $e) {
//             $this->message = $e->errorMessage();
//             return false;
//         } 

// 	}
// }

?>