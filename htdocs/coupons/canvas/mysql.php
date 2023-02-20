<?php


$dbname = 'alissowserwer';
$dbpass = 'dexde3';
$dbuser = 'root';

$con = mysql_connect('localhost', $dbuser, $dbpass);

if(!$con){ echo "Unable to load the database!"; die();}

	echo "Database conneected!";

mysql_select_db($dbname);

$result = mysql_query('SELECT `name`, `level` FROM `players`');
while ($wynik = mysql_fetch_assoc($result))
echo $wynik['name'].' '.$wynik['level'].'<br>';
?>