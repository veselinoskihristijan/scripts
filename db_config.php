<?php
$mysql_hostname = "sql7.freemysqlhosting.net";
$mysql_user = "sql7121843";
$mysql_password = "sql7121843";
$mysql_database = "sql7121843";

$db = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $db) or die("Opps some thing went wrong");

?>