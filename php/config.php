<?
	//define the receiver of the email
	
	define('TO_NAME','Rbista');
	define('TO_EMAIL','joel.burris@gmail.com');
	define('SUBJECT','Contact from JB-SiteDesign');	
	
	define('TEMPLATE_PATH','template/default.php');
 
	define('SMTP_ENABLE',false); // True to enable SMTP
	define('smtpoutserver','');
	define('username','');
	define('password','');

	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>