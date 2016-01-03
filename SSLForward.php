<?php

// Required Libraries
require_once("ip.codehelper.io.php");
require_once("php_fast_cache.php");

// New Class
$_ip = new ip_codehelper();

echo $_ip->SSLForwardJS();
