<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>ระเบียบและข้อบังคับของ วว.</title>
</head>
<style>
    
    table {
        border-collapse: collapse;
        width: 70%;
        text-align: center;

    }

    th {
        background-color: IndianRed;
        color: white;
    }

    .btn-primary {
        margin-left: 82%;
    }

    h1 {
        border: 8px solid #B3A188;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: #916848;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 30%;
        margin: 0 auto;
        font-size: 22px;
    }

    
</style>
<boby>
    <h1>ระเบียบและข้อบังคับของ วว.</h1><br>
    <a href="imperative/createimperative.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูลระเบียบและข้อบังคับของ วว.</button></a> <br>
</boby>
<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM imperative");

?>
<table class="table table-bordered" align="center" width=65% border=1 cellpadding=4>
    <tr align="center">
        <th>รหัส</th>
        <th>รูปภาพ</th>
        <th>รายละเอียด</th>
        <th>ชื่อไฟล์</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $details = iconv("tis-620", "utf-8", $info['Details']);
        $filename = iconv("tis-620", "utf-8", $info['Filename']);

    ?>
        <tr align="center">
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $image; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $filename; ?></td>
            <td><a href='imperative/editimperative.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning">Edit</button></a></td>
            <td><a href='imperative/deleteimperative.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger">delete</button></a></td>
        </tr>
    <?php } ?>
</table>

</html>