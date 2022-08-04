<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 86%;
    }

    td {
        border: 5px solid  #F898A4;
    }

    .button {
        padding: 10px 20px;
        font-size: 15px;
        text-align: center;
        outline: none;
        color: white;
        background-color: RebeccaPurple;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 75%;
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

    .button1 {
        padding: 10px 20px;
        font-size: 10px;
        text-align: center;
        outline: none;
        color: white;
        background-color: GoldenRod;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 2%;
    }

    .button2 {
        padding: 10px 20px;
        font-size: 10px;
        text-align: center;
        outline: none;
        color: white;
        background-color: firebrick;
        border: none;
        border-radius: 10px;
        box-shadow: 0 7px #999;
        margin-left: 2%;

    }
</style>

<body>
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1>แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565</h1><br>
    <a hash="#"><button class="button">เพิ่มข้อมูลแผนการประชุมคณะกรรมการกิจการสัมพันธ์</button></a><br>
    <br>
</body>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM appointment");

?>
<table  border=1 cellpadding=3 align="center">
    <tr align="center" bgcolor="#F3D8D1">
        <td>รหัส</td>
        <td>ประชุมประจำเดือน</td>
        <td>ครั้งที่</td>
        <td>วันที่ประชุม</td>
        <td>เวลาประชุม</td>
        <td>เสนอวาระ</td>
        <td>ออกหนังสือเชิญ</td>
        <td>ส่งเอกสารประชุม</td>
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
        $nole = iconv("tis-620", "utf-8", $info['Nole']);

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
            <td><?php echo $nole; ?></td>
            <td><a href='editappointment.php?ID=<?php echo $info['ID']; ?>'><button class="button1">Edit</button></a></td>
            <td><a href='deleteappointment.php?ID=<?php echo $info['ID']; ?>'><button class="button2">delete</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>