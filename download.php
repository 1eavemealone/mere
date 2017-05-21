<?php
$firmwarename = $_GET['Filename'];
$servername = "localhost";
$username = "root";
$password = "mere2014";
$dbname = "db_mere";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$url = mysqli_query($conn, "SELECT DownloadLink FROM tbl_firmware where DeviceID = '$firmwarename'");
$row = mysqli_fetch_row($url);
$link = 'http://'.$_SERVER['SERVER_NAME'].$row[0];
 
mysqli_query($conn,"UPDATE tbl_firmware SET Count = Count + 1 WHERE DeviceID ='".$firmwarename."'");
mysqli_close($conn);
echo "Thank you for downloading..";
header("Location: $link");
?>