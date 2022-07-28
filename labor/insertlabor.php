<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <a href="create.php">เพิ่มข้อมูลไฟล์งานการประชุม</a>

</body>

<?php
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM labor");
?>

<table width=60% border=1 cellpadding=3>
    <tr>
        <td>รหัส</td>
        <td>รูปภาพ</td>
        <td>รายละเอียด</td>
        <td>ชื่อไฟล์</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("utf-8", "tis-620", $info['Image']);
        $details = iconv("tis-620", "utf-8", $info['Details']);
        $filename = iconv("tis-620", "utf-8", $info['Filename']);
    ?>
        <tr>
            <td><?php echo $info['ID']; ?></td>
            <td><?php echo $image; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $filename; ?></td>
            <td><a href='#.php?ID=<?php echo $info['ID']; ?>'>Edit</a></td>
            <td><a href='#.php?ID=<?php echo $info['ID']; ?>'>delete</a></td>
        </tr>
    <?php } ?>
</table>

</html>