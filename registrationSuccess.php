<?php
$target_dir = "picture/";
$target_file = $target_dir . basename($_FILES["cDirImg"]["name"]);
$uploadStatus = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["DirImg"]["tmp_name"]);
  if ($check !== false) {
    $uploadStatus = 1;
  } else {
    $uploadStatus = 0;
  }
}

if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  $uploadStatus = 0;
}

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
    if ($_POST['CustomerID'] == $row["CustomerID"]) {
      myAlert("ข้อมูล CustomerID: ถูกใช้ไปแล้ว", "registration.html");
      break;
    } elseif ($_POST['cEmail'] == $row["cEmail"]) {
      myAlert("ข้อมูล Email: ถูกใช้ไปแล้ว", "registration.html");
      break;
    } else {
      $sql_insert = "INSERT INTO customer
      VALUES ('$_POST[CustomerID]','$_POST[cName]','$_POST[cEmail]','$_POST[cPhone]','$_POST[cPassword]','$_POST[cHouseNum]',
      '$_POST[cProvince]','$_POST[cCity]','$_POST[cDistrict]','$_POST[cPostcode]','$_POST[cLocDetail]','')";
      $result = mysqli_query($objConnect, $sql_insert);

      if ($uploadStatus == 1) {
        move_uploaded_file($_FILES["cDirImg"]["tmp_name"], $target_file);
        $sql_update = "UPDATE customer SET cDirImg='$target_file' WHERE CustomerID='$_POST[CustomerID]'";
        $result = mysqli_query($objConnect, $sql_update);
      }
      myAlert("การลงทะเบียนเป็นผู้ใช้งาน: สำเร็จ", "login.html");
    }
  }
}
