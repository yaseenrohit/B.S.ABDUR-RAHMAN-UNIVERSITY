<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["mail"];
$sno=$_GET["sub"];
mysql_connect("localhost","root","");
mysql_select_db("gadget");
mysql_query("insert into rohit values('$nm','$cardno','$sno')");

?>
</body>
</html>
