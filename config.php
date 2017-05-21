 <?php
$host = "localhost";
$user = "root";
$pass = "mere2014";
$dbse = "db_mere";

$con = mysql_connect($host,$user,$pass) or die("Cannot connect to server");

mysql_select_db($dbse,$con) or die("Cannot connect to the database");
?>