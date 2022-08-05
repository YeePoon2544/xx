<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ข้อมูลรายชื่อคณะกรรมการสัมพันธ์</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 90%;
    }

    td {
        border: 4px solid RosyBrown;
        padding: 8px;
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
        margin-left: 79%;
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
        border: 8px solid DarkKhaki;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: Orange;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 22px;
    }
</style>

<body>
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1 align='center'>ข้อมูลรายชื่อคณะกรรมการสัมพันธ์</h1>
    <a href="createname.php"><button class="button2">เพิ่มข้อมูลรายชื่อคณะกรรมการสัมพันธ์</button></a> <br>
    &nbsp; &nbsp;



</body>

<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM about");

?>

<table width=65% border=1 cellpadding=3 align="center">
    <tr align="center" bgcolor="PaleGoldenRod">
        <td>รหัส</td>
        <td>รูปภาพ</td>
        <td>ตำแหน่ง</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>แผนก</td>
        <td>บทบาทหน้าที่</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $position = iconv("tis-620", "utf-8", $info['Position']);
        $name = iconv("tis-620", "utf-8", $info['Name']);
        $lastname = iconv("tis-620", "utf-8", $info['Lastname']);
        $department = iconv("tis-620", "utf-8", $info['Department']);
        $role = iconv("tis-620", "utf-8", $info['Role']);
    ?>
        <tr>
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $image; ?></td>
            <td><?php echo $position; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $department; ?></td>
            <td><?php echo $role; ?></td>
            <td><a href='editname.php?ID=<?php echo $info['ID']; ?>'><button class="button">Edit</button></a></td>
            <td><a href='deletename.php?ID=<?php echo $info['ID']; ?>'><button class="button1">delete</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>