<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>คำขอร้องเรียน</title>
</head>
<style>
    
    body {
        font-family: verdana;
    }

    table {
        border-collapse: collapse;
        width: 80%;
    }

    td {

        padding: 8px;
    }

    h1 {
        border: 8px solid #D4D2F2;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: SlateBlue;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 35%;
        margin: 0 auto;
        font-size: 22px;
    }

    th {
        text-align: center;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }
</style>

<body>
    <a href="../admin.php">ย้อนกลับ</a>
    <br>
    <h1 align='center'>คำขอร้องเรียน</h1>
    <br>
</body>
<?php
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM comment");
?>
<table align="center">
    <tr align="center" bgcolor="LightSteelBlue">
        <th>รหัส</th>
        <th>เรื่องร้องเรียน</th>
        <th>รายละเอียดขอร้องเรียน</th>
    </tr>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $subject = iconv("tis-620", "utf-8", $info['Subject']);
        $story = iconv("tis-620", "utf-8", $info['Story']);
    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $story; ?></td>
        </tr>
    <?php } ?>
</table>

</html>