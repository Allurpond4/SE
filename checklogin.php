<?php require_once('conn.php'); ?>
<?php
session_start();
$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."'

and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";

$objQuery = mysql_query($strSQL);

$objResult = mysql_fetch_array($objQuery);

if(!$objResult)
	{
	echo "<script>alert('Username and Password Incorrect!');</script>";
	echo "<script>window.location='admin-login.html'</script>";
}
else{

$_SESSION["UserID"] = $objResult["UserID"];
$_SESSION['Username'] = $objResult["Username"];
$_SESSION['status'] = $objResult["Status"];

$url = "CourseRegis.php?id=".$_SESSION["courseId"];
	
 

session_write_close();


if($objResult["status"] == "ADMIN")

{
if(empty($_SESSION["courseId"])){
		echo "<script>window.location='indexforadmin.html'</script>";}


}

else

{
	if(empty($_SESSION["courseId"])){
		echo "<script>window.location='indexforadmin.html'</script>";}
	
	if(!empty($_SESSION["courseId"])){
		header("location:".$url);
}

}

}

mysql_close();

?>