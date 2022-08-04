<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</title>
</head>
<style>
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

    #add {
        background-color: #E8DBD4;
        width: 300px;
        padding: 25px;
        border: 20px solid #928880;
        margin: 25px;
        text-align: left;
    }
</style>

<body>
    <a href="indexappointment.php">ย้อนกลับ</a>
    <form action="storeappointment.php" method="POST" enctype="multipart/form-data">
        <div align="center">
            <h2>เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</h2>
            <div id="add">
                <p>
                    <label for="text">ประชุมประจำเดือน</label>
                </p>
                <p>
                    <input type="text" name="meetmonth">
                </p>
                <p>
                    <label for="text">ครั้งที่</label>
                </p>
                <p>
                    <input type="text" name="appointment">
                </p>
                <p>
                    <label for="text">วันที่ประชุม</label>
                </p>
                <p>
                    <input type="text" name="date">
                </p>
                <p>
                    <label for="text">เวลาประชุม</label>
                </p>
                <p>
                    <input type="text" name="time">
                </p>
                <p>
                    <label for="text">วันที่เสนอวาระ</label>
                </p>
                <p>
                    <input type="text" name="day">
                </p>
                <p>
                    <label for="text">วันที่ออกหนังสือเชิญ</label>
                </p>
                <p>
                    <input type="text" name="invite">
                </p>
                <p>
                    <label for="text">วันที่ส่งเอกสารประชุม</label>
                </p>
                <p>
                    <input type="text" name="send">
                </p>
                <p>
                    <label for="text">สถานที่ประชุม</label>
                </p>
                <p>
                    <input type="text" name="location">
                </p>
                <p>
                    <label for="text">หมายเหตุ</label>
                </p>
                <p>
                    <input type="text" name="nole">
                </p>
                <p>
                    <input type="submit" name="submit" value="submit">
                </p>
            </div>
        </div>
    </form>
</body>

</html>