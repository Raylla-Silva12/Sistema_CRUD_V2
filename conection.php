<?php

$mysqli = new mysqli("localhost", "root", "usbw", "db_banquinho");
$mysqli->set_charset('utf8');

if ($mysqli->connect_errno) {
	echo $mysql->connect_error;
}
