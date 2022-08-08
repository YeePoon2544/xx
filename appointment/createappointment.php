<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</title>
</head>
<style>
    body {
        padding-left: 400px;
        padding-right: 400px;
    }

    input[type=submit] {
        background-color: #fa4848f7;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #49c31d;
    }

    input[type=reset] {
        background-color: #787A79;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=reset]:hover {
        background-color: #656C5C;
    }
</style>

<body>
    <a href="indexappointment.php">ย้อนกลับ</a>
    <form action="storeappointment.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="POST" enctype="multipart/form-data">
        <div align="center">
            <h2>เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</h2>
            
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="meetmonth" type="text" placeholder="ประชุมประจำเดือน">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-calendar-check' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="appointment" type="text" placeholder="ครั้งที่">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="date" type="text" placeholder="วันที่ประชุม">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-clock' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="time" type="text" placeholder="เวลาประชุม">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="day" type="text" placeholder="วันที่เสนอวาระ">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="invite" type="text" placeholder="วันที่ออกหนังสือเชิญ">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='far fa-calendar-alt' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="send" type="text" placeholder="วันที่ส่งเอกสารประชุม">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='fas fa-map-marker-alt' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="location" type="text" placeholder="สถานที่ประชุม">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class='fas fa-bullhorn' style='font-size:36px'></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="note" type="text" placeholder="หมายเหตุ">
                </div>
            </div>

            <p class="w3-center">
                <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="reset" value="Cancel" />
            </p>
    </form>
</body>

</html>