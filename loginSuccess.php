<?php
session_start();
$objConnect = mysqli_connect("localhost", "root", "") or die("can't connect to database");
$db = mysqli_select_db($objConnect, "midtermtest");
mysqli_query($objConnect, "SET NAMES utf8");

if ($objConnect->connect_error) {
  die("connection failed" . $conn->connect_error);
}
$sql = "SELECT * FROM customer";
$result = $objConnect->query($sql);

function myAlert($msg, $url)
{
  echo '<script language="javascript">alert("' . $msg . '");</script>';
  echo "<script>document.location = '$url'</script>";
}

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($_GET['CustomerID'] == $row["CustomerID"] && $_GET['cPassword'] == $row["cPassword"]) {
      $_SESSION["CustomerID"] = $row["CustomerID"];
      myAlert("เข้าสู่ระบบสำเร็จ", "main.php");
    }
  }
  myAlert("เข้าสู่ระบบไม่สำเร็จ", "login.html");
}
?>
