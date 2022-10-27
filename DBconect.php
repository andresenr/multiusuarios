<?php
$db_host="bvikpljfb9y75eikpib0-mysql.services.clever-cloud.com"; //localhost server 
$db_user="uni7djqzkrulfrdf";	//database username
$db_password="WhbnW02in4oJYKBEzG0g";	//database password   
$db_name="bvikpljfb9y75eikpib0";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



