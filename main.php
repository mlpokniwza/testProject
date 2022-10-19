<!DOCYE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>หน้าหลักtest</title>
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
        <br><br>
        <div class="frame" style="background-color: rgba(241,240,246,255);">
            <center>
                <h1>ประเภททำความสะอาดddddd</h1>
                <a href="general.php"><img style="width: 300px; height: 400px;" src="picture/main1.png" /></a>
                <a href="virus.php"><img style="width: 400; height: 400px;" src="picture/main2.png" /></a>

            </center>
        </div>
    </body>

    </html>

    <script language="JavaScript">
        function Popup($url) {
            window.open($url, 'popup-name', 'width=900,height=850,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
        }
    </script>
</html>