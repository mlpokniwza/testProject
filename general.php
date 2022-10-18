<?php
session_start();
$Customer = $_SESSION["CustomerID"]
?>
<!DOCYE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>ทำความสะอาดทั่วไป</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body style="background-color: rgb(0, 168, 235);">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h4 class="mb-4 pb-2 pb-md-0 mb-md-3" style="text-align: left;">ทำความสะอาดทั่วไป</h4>
                                <hr class="my-4" />
                                <form action="generalInsert.php" method="post">

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="CustomerID">ชื่อผู้ใช้ :</label>
                                                <input type="text" class="form-control form-control-sm" disabled value=<?php echo $Customer; ?> name="CustomerID" id="CustomerID" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline datepicker w-100">
                                                <label class="form-label" for="วัน">วัน :</label>
                                                <input type="date" class="form-control form-control-sm" name="Date" id="Date" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 d-flex align-items-center">

                                            <div class="form-outline time w-100">
                                                <label class="form-label" for="เวลา">เวลา :</label>
                                                <input type="time" class="form-control form-control-sm" name="Time" id="Time" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="countTime">ระยะเวลา(ชั่วโมง) :</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="ระบุระยะเวลา" name="countTime" id="countTime" />
                                        </div>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="row">
                                        <div class="form-outline">
                                            <label class="form-label" for="จังหวัด">สถานที่ใช้บริการความสะอาด :</label>
                                            <select class="select form-control-sm" name="typeLoc" id="typeLoc">
                                                <option selected value="บ้าน">บ้าน</option>
                                                <option value="ที่ทำงาน">ที่ทำงาน</option>
                                                <option value="คอนโด">คอนโด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="บ้านเลขที่">บ้านเลขที่ :</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="บ้านเลขที่" name="HouseNum" id="HouseNum" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="จังหวัด">จังหวัด :</label>
                                                <select style="width: 100%;" class="select form-control-sm" id="Province" name="Province">
                                                    <option value="1" disabled selected>เลือกจังหวัด</option>
                                                    <option value="กรุงเทพ">กรุงเทพ</option>
                                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                                    <option value="ปทุมธานี">ปทุมธานี</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline">
                                                <label class="form-label" for="uCity">อำเภอ :</label>
                                                <select style="width: 100%;" class="select form-control-sm" id="City" name="City">
                                                    <option value="1" disabled selected>เลือกอำเภอ</option>
                                                    <option value="บางปะกง">บางปะกง</option>
                                                    <option value="คลอง6">คลอง6</option>
                                                    <option value="ดอนเมือง">ดอนเมือง</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="uDistrict">ตำบล :</label>
                                                <select style="width: 100%;" class="select form-control-sm" id="District" name="District">
                                                    <option value="1" disabled selected>เลือกตำบล</option>
                                                    <option value="ทุ่งสองห้อง">ทุ่งสองห้อง</option>
                                                    <option value="บางเขน">บางเขน</option>
                                                    <option value="สนามบิน">สนามบิน</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="รหัสไปรษณีย์">รหัสไปรษณีย์ :</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="รหัสไปรษณีย์" name="Postcode" id="Postcode" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-outline">
                                                <label class="form-label" for="รายละเอียดที่อยู่">รายละเอียดที่อยู่ :</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="หมู่, ซอย, ถนน" name="LocDetail" id="LocDetail" />
                                            </div>

                                        </div>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="mb-3">
                                        <label for="Payment" class="form-label">ชำระเงินโดย :</label><br>
                                        <input type="radio" name="Payment" id="Payment" value="บัญชีธนาคาร" required>บัญชีธนาคาร&ensp;
                                        <input type="radio" name="Payment" id="Payment" value="บัตรเครดิต">บัตรเครดิต&ensp;
                                        <input type="radio" name="Payment" id="Payment" value="บัตรเดบิต">บัตรเดบิต
                                    </div>
                                    <hr class="my-4" />
                                    <div class="mt-4 pt-2" style="text-align: right;">
                                        <input class="btn btn-danger" type="reset" value="ยกเลิก" />
                                        <input class="btn btn-success" type="submit" value="ตกลง" />
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