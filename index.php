
<?php
 $greetings = ['Hi there', 'Hello human', 'hello'];
$relay_greetings = $greetings[mt_rand(0, count($greetings) - 1)];

?>


<?php

$str=  "Hello ken hi";
$count = substr_count($str, "hi");
echo $count;
if ( $count  == 1)
  {
echo $relay_greetings;	
}



?>