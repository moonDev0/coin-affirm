﻿<?php 
// DB credentials.
define('DB_HOST','sql203.epizy.com');
define('DB_USER','epiz_33309750');
define('DB_PASS','OTI9T0m6U8');
define('DB_NAME','epiz_33309750_armentum');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
