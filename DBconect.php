<?php
$db_host="bzahw6mgdcofk8jxymty-postgresql.services.clever-cloud.com"; //localhost server 
$db_user="uis8nrtriax7jkp7tmp4";	//database username
$db_password="2h08wkUqs9aRpdEcQlBT";	//database password   
$db_name="bzahw6mgdcofk8jxymty";	//database name

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



