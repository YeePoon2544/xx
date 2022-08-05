<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 88%;
    }

    td {
        border: 5px solid #F898A4;
    }

    .button {
        padding: 10px 22px;
        font-size: 10px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: goldenrod;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 5%;
    }

    .button:hover {
        background-color: #D5C392
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button1 {
        padding: 10px 20px;
        font-size: 10px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: FireBrick;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 2%;
    }

    .button1:hover {
        background-color: #6D1919
    }

    .button1:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button2 {
        padding: 15px 25px;
        font-size: 15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #04AA6D;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
        margin-left: 71%;
    }

    .button2:hover {
        background-color: #3e8e41
    }

    .button2:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }


    h1 {
        border: 8px solid PaleVioletRed;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: MediumVioletRed;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 47%;
        margin: 0 auto;
        font-size: 22px;
    }


    footer {
        width: 70%;
        background-color: #CC3333;
        color: white;
        text-align: center;
        font-size: 20px;
        margin-left: 15%;


    }
</style>

<body>
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1>แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</h1><br>
    <a href="createappointment.php"><button class="button2">เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์</button></a><br>
    <br>
</body>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM appointment");

?>
<table border=1 cellpadding=3 align="center">
    <tr align="center" bgcolor="#F3D8D1">
        <td>รหัส</td>
        <td>ประชุมประจำเดือน</td>
        <td>ครั้งที่</td>
        <td>วันที่ประชุม</td>
        <td>เวลาประชุม</td>
        <td>วันเสนอวาระ</td>
        <td>วันออกหนังสือเชิญ</td>
        <td>วันส่งเอกสารประชุม</td>
        <td>สถานที่ประชุม</td>
        <td>หมายเหตุ</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $meetmonth = iconv("tis-620", "utf-8", $info['Meetmonth']);
        $appointment = iconv("tis-620", "utf-8", $info['Appointment']);
        $date = iconv("tis-620", "utf-8", $info['Date']);
        $time = iconv("tis-620", "utf-8", $info['Time']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        $invite = iconv("tis-620", "utf-8", $info['Invite']);
        $send = iconv("tis-620", "utf-8", $info['Send']);
        $location = iconv("tis-620", "utf-8", $info['Location']);
        $note = iconv("tis-620", "utf-8", $info['Note']);

    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $meetmonth; ?></td>
            <td><?php echo $appointment; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $time; ?></td>
            <td><?php echo $day; ?></td>
            <td><?php echo $invite; ?></td>
            <td><?php echo $send; ?></td>
            <td><?php echo $location; ?></td>
            <td><?php echo $note; ?></td>
            <td><a href='editappointment.php?ID=<?php echo $info['ID']; ?>'><button class="button">Edit</button></a></td>
            <td><a href='deleteappointment.php?ID=<?php echo $info['ID']; ?>'><button class="button1">delete</button></a></td>
        </tr>
    <?php } ?>
</table>
<br>
<footer>หมายเหตุ : แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565 อาจมีการเปลี่ยนแปลงตามมติที่ประชุม</footer>

</html>