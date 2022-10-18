<?php
session_start();
$Customer = $_SESSION["CustomerID"];

$objConnect = mysqli_connect("localhost", "root", "") or die("can't connect to database");
$db = mysqli_select_db($objConnect, "midtermtest");
mysqli_query($objConnect, "SET NAMES utf8");

if ($objConnect->connect_error) {
    die("connection failed" . $conn->connect_error);
}
function myAlert($msg, $url)
{
    echo '<script language="javascript">alert("' . $msg . '");</script>';
    echo "<script>document.location = '$url'</script>";
}

$sql_insert = "INSERT INTO virus
      VALUES ('','$Customer','$_POST[Date]','$_POST[Time]','$_POST[typeLoc]','$_POST[HouseNum]',
      '$_POST[Province]','$_POST[City]','$_POST[District]','$_POST[Postcode]','$_POST[LocDetail]','$_POST[Payment]')";
$result = mysqli_query($objConnect, $sql_insert);

if (!$result) {
    myAlert("การทำรายการ: ไม่สำเร็จ", "main.php");
} else {
    myAlert("การทำรายการ: สำเร็จ", "main.php");
}



?>