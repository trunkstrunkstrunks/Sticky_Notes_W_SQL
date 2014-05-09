<?php


/* Database config */

$db_host		= 'your host or localhost';
$db_user		= 'your user name';
$db_pass		= 'your password';
$db_database	= 'your db';

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>