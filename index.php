<?php
 $greetings = ['Hi there', 'Hello human', 'hello'];
$relay_greetings = $greetings[mt_rand(0, count($greetings) - 1)];
echo $relay_greetings;
?>
