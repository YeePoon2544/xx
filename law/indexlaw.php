<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>ข้อมูลเกี่ยวกับกฏหมายแรงงานรัฐวิสาหกิจ</title>
</head>

<style>
    body {
        font-family: 'Prompt', sans-serif;

    }

    table {
        border-collapse: collapse;
        width: 50%;
        text-align: center;

    }

    th {
        background-color: IndianRed;
        color: white;
    }

    .btn-primary {
        margin-left: 89%;
        font-size: 16px;   
    }

    h1 {
        border: 8px solid #AA7C7A;
        width: 150px;
        border-radius: 45px;
        text-align: center;
        color: white;
        font-size: 27px;
        background-color: #75464A;
        margin-left: 10px;
        margin-top: 40px;
        padding: 7px;
        width: 40%;
        margin: 0 auto;
        font-size: 22px;
        font-family: 'Prompt', sans-serif;
    }
</style>

<body>
    <br>
    <h1>ข้อมูลเกี่ยวกับกฏหมายแรงงานรัฐวิสาหกิจ</h1> <br>
    <a href="admin.php?Menu=3&Submenu=createlaw"><button type="button" class="btn btn-primary">เพิ่มข้อมูล <i class='fas fa-plus-circle' style='font-size:20px'></i></button></a> <br>

</body>

<?php

$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM law");

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
            <td><img id="showimg" src="uploads/<?php echo $image; ?>" style="height:120px; width:100px;"></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $filename; ?></td>
            <td><a href='admin.php?Menu=3&Submenu=editlaw&ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-warning"><i class='far fa-edit' style='font-size:22px'></i></button></a></td>
            <td><a href='law/deletelaw.php?ID=<?php echo $info['ID']; ?>'><button type="button" class="btn btn-danger"><i class='fas fa-eraser' style='font-size:22px'></i></button></a></td>
        </tr>
    <?php } ?>
</table>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

</html>