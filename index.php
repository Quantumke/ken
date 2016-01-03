
<?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
$greetings = ['Hi there', 'Hello human', 'hello'];
$valgure_response = ["I cannot respond to that kind of dialect", "would you ask your mother that?", "i will email your mother this"];
$str="";
$error ="";
date_default_timezone_set('UTC');
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



$relay_today =  substr_count($str, "when is today" );
$relay_today2 = substr_count($str, "todays datee" );
if ( $relay_today   == 1 || $relay_today2==1 )
  {
echo date('l jS \of F Y h:i:s A');
  }

  $geo_location =   substr_count($str, "where am i " );
  if ($geo_location ==1)
  {
  	echo $country;
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
