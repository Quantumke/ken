
<?php
$greetings = ['Hi there', 'Hello human', 'hello'];
$valgure_response = ["I cannot respond to that kind of dialect", "would you ask your mother that?", "i will email your mother this"];
$str="";
$error ="";
function greetings( ){
 global $greetings;
 global $relay_greetings;
$relay_greetings = $greetings[mt_rand(0, count($greetings) - 1)];

}



function vulgar(){
global $valgure_response;
global $relay_valgure_response;
$relay_valgure_response = $valgure_response [mt_rand(0, count($valgure_response ) - 1)];
}


function sendmail(){
	$to      = $mail_to;
$subject = $str ;
$message = $str ;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}

vulgar();
greetings();
if (isset($_POST['submit'])=='submit')
{
$str = $_POST['ui'];
}

$fuck =  substr_count($str, "fuck" );
$fucking =  substr_count($str, "fucking" );
$fucked =  substr_count($str, "fucked" );
$shit =  substr_count($str, "shit" );


if ( $fuck  == 1 || $fucking == 1 || $fucked ==1 || $shit == 1)
  {
 echo $relay_valgure_response;	
}




$suggested_greetings= ["hello", "hi" , "hey"];
$hi = substr_count($str, "hi" );
$hi2 = substr_count($str, "Hi" );
$hello = substr_count($str, "hello" );
$hello2 = substr_count($str, "Hello" );
$hi3 = substr_count($str, "how are you");


if ( $hi  == 1 || $hi2 == 1 || $hello ==1 || $hello2 == 1 || $hi3 ==1)
  {
 echo $relay_greetings;	
}

else {

	echo $error;
}





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST" enctype="">

<input type="text" name="ui" id="ui" autocomplete="off">
<input type="submit" name="submit" value="submit">
	
</form>
</body>
</html>