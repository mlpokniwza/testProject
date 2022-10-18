<?php
session_start();
$Customer = $_SESSION["CustomerID"];

require 'connect.php';
$query = "SELECT * FROM customer where CustomerID = '$Customer'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_array($result)
?>

<!DOCYE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>แก้ไขโปรไฟล์</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body style="background-color: rgb(0, 168, 235);">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="picture/mlogo.jpg" class="logo" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="menu-item" href="main.php">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-item" href="profile.php"> โปรไฟล์</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-item" href="list.php">ดูรายการ</a>
                        </li>
                    </ul>
                    <a style="background-color: rgb(180, 180, 180); color: black" class="right" href="logoutSuccess.php">ออกจากระบบ </a>
                </div>
            </div>
        </nav>
        <div>

            <center>
                <br><br>
                <div class="card mb-3" style="max-width: 60%;">
                    <div class="row g-0">

                        <div class="col-md-4" style="background: linear-gradient(to left, #ff5050 0%, #ff9966 100%);">
                            <br><br>
                            <center>
                                <img class="wi" src="<?php echo $data["cDirImg"]; ?>" width="200" height="200" alt="ProfilePic" />
                                <br><br>
                                <label class="form-label"><?php echo $data["cName"]; ?></label>
                                <p>ผู้ใช้ทั่วไป</p>
                            </center>
                        </div>

                        <div class="col-md-8" style="text-align: left;">
                            <div class="card-body">
                                <form action="profileEditSuccess.php" method="post" enctype="multipart/form-data">
                                    <br>
                                    <h4>แก้ไขข้อมูลส่วนตัว</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="รหัสผ่าน">ชื่อผู้ใช้ :</label>
                                            <input style="width: 100%" type="text" value="<?= $data['CustomerID']; ?>" name="CustomerID" id="CustomerID" disabled><br>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="รหัสผ่าน">ชื่อ - นามสกุล :</label>
                                                <input style="width: 100%" type="text" value="<?= $data['cName']; ?>" name="cName" id="cName"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="เบอร์โทร">เบอร์โทร :</label>
                                            <input style="width: 100%" type="text" value="<?= $data['cPhone']; ?>" name="cPhone" id="cPhone"><br>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="อีเมล">อีเมล :</label>
                                            <input style="width: 100%" type="text" value="<?= $data['cEmail']; ?>" name="cEmail" id="cEmail" disabled><br>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="รหัสผ่าน">รหัสผ่าน :</label>
                                                <input style="width: 100%" type="text" value="<?= $data['cPassword']; ?>" name="cPassword" id="cPassword"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h4>แก้ไขที่อยู่ปัจจุบัน</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="บ้านเลขที่">บ้านเลขที่ :</label>
                                            <input style="width: 100%" type="text" value="<?= $data['cHouseNum']; ?>" name="cHouseNum" id="cHouseNum"><br>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="จังหวัด">จังหวัด :</label>
                                                <input style="width: 100%" type="uProvince" value="<?= $data['cProvince']; ?>" name="cProvince" id="cProvince"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="อำเภอ">อำเภอ :</label>
                                            <input style="width: 100%" type="text" value="<?= $data['cCity']; ?>" name="cCity" id="cCity"><br>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="ตำบล">ตำบล :</label>
                                                <input style="width: 100%" type="uDistrict" value="<?= $data['cDistrict']; ?>" name="cDistrict" id="cDistrict"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label class="form-label" for="รหัสไปรษณีย์">รหัสไปรษณีย์ :</label>
                                            <input style="width: 100%" type="text" value="<?= $data['cPostcode']; ?>" name="cPostcode" id="cPostcode"><br>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <label class="form-label" for="รายละเอียดที่อยู่">รายละเอียดที่อยู่ :</label>
                                                <input style="width: 100%" type="uLocDetail" value="<?= $data['cLocDetail']; ?>" name="cLocDetail" id="cLocDetail"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3" style="text-align: left;">
                                        <label for="formFile" class="form-label">อัปโหลดรูปโปรไฟล์ :</label>
                                        <input class="form-control" type="file" id="DirImg" name="DirImg">
                                    </div>
                                    <div style="text-align: right;">
                                        <input class="btn btn-success" type="submit" value="ยืนยัน">
                                        <input class="btn btn-danger" type="reset" value="ยกเลิก">
                                    </div>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </body>

    </html>