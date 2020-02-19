<?php

session_start();

define("WEBMASTER_EMAIL", 'hamalton@imsolutions.mobi');
define("WEBMASTER_EMAIL1", 'lokesh@imsolutions.mobi');
define("WEBMASTER_EMAIL2", 'ravi.k@imsolutions.mobi');


error_reporting(E_ALL ^ E_NOTICE);

function ValidateEmail($value) {
    $regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';

    if ($value == '') {
        return false;
    } else {
        $string = preg_replace($regex, '', $value);
    }

    return empty($string) ? true : false;
}

function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}


if ($_POST) {


    $name = stripslashes(trim($_POST['name']));
    $email = stripslashes(trim($_POST['email']));
    $ccode = stripslashes(trim($_POST['ccode']));
    $phone = stripslashes(trim($_POST['phone']));
    $page = stripslashes(trim($_POST['Page']));
    $query = stripslashes(trim($_POST['message']));
   // $captcha = $_POST['g-recaptcha-response'];
   if($page =='') {
    $subject = 'Enquiry from Pratham '.$page;
   }else {
     $subject = 'Enquiry from Pratham Construction';
    }


    $error = '';

// Check fullname
  if (!$name || empty($name)) {
        $error .= 'Please enter your Name.<br />';
        die('<p style="color:red;">Please enter your Name</p>');
    }
    if (!$email || empty($email)) {
        $error .= 'Please enter an e-mail address.<br />';
        die('<p style="color:red;">Please enter an e-mail address</p>');
    }
    if ($email && !ValidateEmail($email)) {
        $error .= 'Please enter a valid e-mail address.<br />';
        die('<p style="color:red;">Please enter a valid e-mail address</p>');
    }
    if (!$ccode) {
        $error .= 'Please Select your Country Code.<br />';
        die('<p style="color:red;">Please Select your Country Code</p>');
    }
    if (!$phone || !validate_mobile($phone)) {
        $error .= 'Enter 10 digit mobile number.<br />';
        die('<p style="color:red;">Enter 10 digit mobile number</p>');
    }
	if (!$phone || empty($phone)) {
        $error .= 'Please enter your phone.<br />';
        die('<p style="color:red;">Please enter your phone</p>');
    }
    if (!$query || empty($query)) {
        $error .= 'Please enter your message.<br />';
        die('<p style="color:red;">Please enter your message</p>');
    }
    
   


    $email_name = "Pratham Construction";
    $email_to = "noreply@imsolutions.in";

    $headers = 'MIME-Version: 2.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $email_name . ' <' . $email_to . '>' . "\r\n";

    $message = '<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
		
		
		<tr align="center">
			<td colspan="3" style="text-align:center;">
				<img src="http://demo.imsolutions.in/pratham/images/pratham/logo.png" style="background-color: #000;">
			</td>
        </tr>
		<tr style="background-color:#f5f5f5">
                <th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">' . $name . '</td>
        </tr>
        <tr style="">
                <th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
                        <td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">' . $email . '</td>
        </tr>
        <tr style="background-color:#f5f5f5">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
                        <td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">' .$ccode. $phone . '</td>
        </tr>
		<tr>
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Message <span style="color:red">*</span></th>
                        <td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">' . $query . '</td>
        </tr>
		
</table>';
    
	$response = $_POST['g-recaptcha-response'];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$key = '6LdFLNgUAAAAADbAv44YBrR_HVpKcAg1K0Nxl9x6';
	$data = array('secret' => $key, 'response' => $response);
	$options = array(
		'http' => array(
			'header' => "Content-type: application/x-www-form-urlencoded\r\n",
			'method' => "POST",
			'content' => http_build_query($data),
		),
	);
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	//var_dump($result);
	if ($result === false) {
		echo '<div class="alert alert-danger">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>  <strong>Error!</strong> Failed to contact reCAPTCHA</div>';
	} else {
		$result = json_decode($result);
		if ($result->success) {
			ini_set("sendmail_from", 'info@imsolutions.mobi'); // for windows server
            $mail = mail(WEBMASTER_EMAIL,$subject,$message,$headers,'-freturn@imsolutions.in');      
            $mail1 = mail(WEBMASTER_EMAIL1,$subject,$message,$headers,'-freturn@imsolutions.in');      
            $mail2 = mail(WEBMASTER_EMAIL2,$subject,$message,$headers,'-freturn@imsolutions.in');      
		  if($mail ||$mail1 || $mail2 )
		  {
		  $mail = mail($email,'Thanks for contacting us','<h4>Thank you for contacting Pratham Construction ! Our team will get in touch with you shortly. Appreciate your patience.</h4>',$headers,'-freturn@imsolutions.in');
		  echo 'OK';
		  }
		} else {
			$error = true;
			echo '<p style="color:red;"> <strong>Error!</strong> You are spammer</p>';
		}

	}
}
?>