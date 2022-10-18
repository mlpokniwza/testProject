<?php
session_start();
$Customer = $_SESSION["CustomerID"]
?>
<!DOCYE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>ประเภท ทำความสะอาดทั่วไป</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <style>
        input:read-only {
            background-color: lightgrey;
        }
    </style>

    <body style="background-color: rgb(0, 168, 235);">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-3" style="text-align: center;">ชำระเงิน</h3>
                                <h5 class="mb-4 pb-2 pb-md-0 mb-md-3" style="text-align: left;">ประเภท ทำความสะอาดทั่วไป</h5>
                                <hr class="my-4" />
                                <form action="generalInsertSuccess.php" method="post">

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="CustomerID">ชื่อผู้ใช้ :</label>
                                                <input type="text" class="form-control form-control-sm" value=<?php echo $Customer; ?> readonly name="CustomerID" id="CustomerID" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline datepicker w-100">
                                                <label class="form-label" for="วัน">วัน :</label>
                                                <input type="date" class="form-control form-control-sm" value="<?php echo $_POST["Date"]; ?>" readonly name="Date" id="Date" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline time w-100">
                                                <label class="form-label" for="เวลา">เวลา :</label>
                                                <input type="time" class="form-control form-control-sm" value="<?php echo $_POST["Time"]; ?>" readonly name="Time" id="Time" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="countTime">ระยะเวลา(ชั่วโมง) :</label>
                                            <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["countTime"]; ?>" readonly name="countTime" id="countTime" />
                                        </div>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="row">
                                        <div class="form-outline">
                                            <label class="form-label" for="typeLoc">สถานที่ใช้บริการความสะอาด : <?php echo $_POST["typeLoc"]; ?></label>
                                            <input type="hidden" value=<?php echo $_POST["typeLoc"]; ?> name="typeLoc" id="typeLoc">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="บ้านเลขที่">บ้านเลขที่ :</label>
                                                <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["HouseNum"]; ?>" readonly name="HouseNum" id="HouseNum" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="จังหวัด">จังหวัด :</label>
                                                <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["Province"]; ?>" readonly name="Province" id="ProvinceProvince" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="uCity">อำเภอ :</label>
                                                <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["City"]; ?>" readonly name="City" id="City" />
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="uDistrict">ตำบล :</label>
                                                <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["District"]; ?>" readonly name="District" id="District" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="รหัสไปรษณีย์">รหัสไปรษณีย์ :</label>
                                                <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["Postcode"]; ?>" readonly name="Postcode" id="Postcode" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="รายละเอียดที่อยู่">รายละเอียดที่อยู่ :</label>
                                                <input type="text" class="form-control form-control-sm" value="<?php echo $_POST["LocDetail"]; ?>" readonly name="LocDetail" id="LocDetail" />
                                            </div>

                                        </div>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="mb-3">
                                        <label class="form-label">ชำระเงินโดย : <?php echo $_POST["Payment"]; ?></label><br>
                                        <label class="form-label">รวมราคาสุทธิ : 500</label><br>
                                        <label class="form-label">ภาษีมูลค่าเพิ่ม(7%) : 35</label><br>
                                        <label class="form-label">ราคารวมภาษีมูลค่าเพิ่ม : 535</label><br>
                                        <input type="hidden" value="535" name="Payment" id="Payment">
                                    </div>
                                    <hr class="my-4" />
                                    <div class="mt-4 pt-2" style="text-align: center;">
                                        <a class="btn btn-secondary" href="main.php">ยกเลิก </a>
                                        <input class="btn btn-danger" style="background-color: red;" type="submit" value="ตกลง" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>