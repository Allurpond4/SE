<?
$hostname = "localhost";

//***********************
$dbUser = "root"; //"root";
$dbPass = "123456789";//"ced"; //"tct";
//***** OK, you should never use this account. ****
// Create, your own username and password for this database

$dbName = "e-commerce";//test_thai";
//$conn = mysql_connect($hostname, $db_user, $password) or die("Cannot open connection");
//mysql_select_db(“webtech”, $conn ) or die ("Cannot open database");

if (!($link=mysql_connect($hostname, $dbUser, $dbPass))) {
	echo "Cannot Connection<BR>";
	error_log(mysql_error(), 3, “/tmp/phplog.err”);
}
if (!mysql_select_db($dbName, $link)) {
	echo "Cannot Open<BR>";
	error_log(mysql_error(), 3, “/tmp/phplog.err”);
}
//mysql_db_query("test_thai","SET NAMES utf8"); 

?>