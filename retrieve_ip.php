<?php
$ip = file_get_contents('https://api.ipify.org?format=json');
echo $ip;
?>
