<!DOCTYPE html>
<html>

<head>
    <title>ดูรายการ</title>
    <meta charset="UTF-8">

    <style>
        .logo {
            width: 130px;
            height: 55px;
            padding: 0px;
            margin: 0px;
        }

        body {
            background: linear-gradient(to left, #0000cc 0%, #00ccff 100%);
        }

        table {
            background: #2C2C2C;
            border-radius: 0.25em;
            border-collapse: collapse;
            margin: 1em;
        }

        th {
            border-bottom: 1px solid #364043;
            color: #008BFF;
            font-size: 1.10em;
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: center;
        }

        td {
            color: #fff;
            font-weight: 400;
            padding: 0.65em 1em;
        }

        .disabled td {
            color: #4F5F64;
        }

        tbody tr {
            transition: background 0.25s ease;
        }

        tbody tr:hover {
            background: #014055;
        }


        .menu-item {
            color: black;
            padding: 15px;
            display: inline-block;
            text-decoration: none;
        }

        .right {
            position: absolute;
            right: 0px;
            background-color: #4caf50;
            border: none;
            color: white;
            text-decoration: none;
            cursor: pointer;
            padding: 24px;
            margin: auto;
            display: inline-block;
            text-decoration: none;
        }

        .menu-item {
            color: white;
            padding: 15px;
            display: inline-block;
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: rgb(0, 168, 235); margin: 0em;">
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
    <br><br>
    <h1 style="font-family:'Courier New'; font-size:30px;">&ensp;ทำความสะอาดทั่วไป </h1>
    <center>
        <hr>
        <table style="width: 90%;">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ-นามสกุล</th>
                <th>วัน</th>
                <th>ระยะเวลา</th>
                <th>เวลา</th>
                <th>สถานที่</th>
                <th>บ้านเลขที่</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>รหัสไปรษณีย์</th>
                <th>รายละเอียดที่อยู่</th>
                <th>ราคา</th>
            </tr>

            <?php
            require 'connect.php';
            $query = "SELECT * FROM general";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td align='center'>" . $row["CleanID"] . "</td>";
                echo "<td align='center'>" . $row["UserID"] . "</td>";
                echo "<td align='center'>" . $row["Date"] . "</td>";
                echo "<td align='center'>" . $row["countTime"] . "</td>";
                echo "<td align='center'>" . $row["Time"] . "</td>";
                echo "<td align='center'>" . $row["typeLoc"] . "</td>";
                echo "<td align='center'>" . $row["HouseNum"] . "</td>";
                echo "<td align='center'>" . $row["Province"] . "</td>";
                echo "<td align='center'>" . $row["City"] . "</td>";
                echo "<td align='center'>" . $row["District"] . "</td>";
                echo "<td align='center'>" . $row["Postcode"] . "</td>";
                echo "<td align='center'>" . $row["LocDetail"] . "</td>";
                echo "<td align='center'>" . $row["Payment"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            ?>
        </table>
    </center>

    <br>
    <h1 style="font-family:'Courier New'; font-size:30px;">&ensp;บริการฆ่าเชื้อและไวรัส </h1>
    <hr>
    <center>
        <table style="width: 90%;">
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ-นามสกุล</th>
                <th>วัน</th>
                <th>เวลา</th>
                <th>สถานที่</th>
                <th>บ้านเลขที่</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>รหัสไปรษณีย์</th>
                <th>รายละเอียดที่อยู่</th>
                <th>ราคา</th>
            </tr>

            <?php
            require 'connect.php';
            $query = "SELECT * FROM virus";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td align='center'>" . $row["CleanID"] . "</td>";
                echo "<td align='center'>" . $row["UserID"] . "</td>";
                echo "<td align='center'>" . $row["Date"] . "</td>";
                echo "<td align='center'>" . $row["Time"] . "</td>";
                echo "<td align='center'>" . $row["typeLoc"] . "</td>";
                echo "<td align='center'>" . $row["HouseNum"] . "</td>";
                echo "<td align='center'>" . $row["Province"] . "</td>";
                echo "<td align='center'>" . $row["City"] . "</td>";
                echo "<td align='center'>" . $row["District"] . "</td>";
                echo "<td align='center'>" . $row["Postcode"] . "</td>";
                echo "<td align='center'>" . $row["LocDetail"] . "</td>";
                echo "<td align='center'>" . $row["Payment"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            ?>
        </table>
    </center>
</body>

</html>