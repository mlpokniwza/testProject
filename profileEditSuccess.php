<?php
session_start();
$Customer=$_SESSION["CustomerID"];

$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"midtermtest");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_update ="UPDATE customer SET cName='$_POST[cName]', cPhone='$_POST[cPhone]',cPassword='$_POST[cPassword]', 
cHouseNum='$_POST[cHouseNum]', cProvince='$_POST[cProvince]', cCity='$_POST[cCity]', cDistrict='$_POST[cDistrict]',
cPostcode='$_POST[cPostcode]', cLocDetail='$_POST[cLocDetail]' WHERE CustomerID ='$Customer'";
$result=mysqli_query($objConnect, $sql_update);

$target_dir = "picture/";
$target_file = $target_dir . basename($_FILES["DirImg"]["name"]);
$uploadStatus = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["DirImg"]["tmp_name"]);
  if($check !== false) {
    $uploadStatus = 1;
  } else {
    $uploadStatus = 0;
  }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadStatus = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadStatus == 1) {
    move_uploaded_file($_FILES["DirImg"]["tmp_name"], $target_file);
    $sql_update ="UPDATE customer SET cDirImg='$target_file' WHERE CustomerID='$Customer'";
    $result=mysqli_query($objConnect, $sql_update);
}
echo "<script>document.location = 'profile.php'</script>";
?>
