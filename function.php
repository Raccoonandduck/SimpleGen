<?php
function head()
{
	include 'head.html';
}
function footer()
{
	include 'footer.html';
}
function DB_Connect()
{
	$dbname="calculator";
	$dbuser="user_calc";
	$dbserver="localhost";
	$dbpass="wowmya4ppitis";
	mysql_connect($dbserver,$dbuser,$dbpass);
	mysql_select_db($dbname);
	mysql_query('set character_set_client="utf8"');
	mysql_query('set character_set_results="utf8"');
	mysql_query('set collation_connection="utf8_general_ci"');
	$query="SET NAMES 'utf8'";
	mysql_query($query);
}
?>