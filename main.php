<?php

$host_name = 'localhost';
$user_name = 'root';
$password = '';

$select_db ='date';
if(!@mysql_connect($host_name,$user_name,$password)|| !@mysql_select_db($select_db))
{
	
	die('not connect');
	
}

?>