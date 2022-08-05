<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>แก้ไขข้อมูลรายชื่อคณะกรรมการสัมพันธ์</title>
</head>

<?php

//ไอดีที่เราทำการดึงมาเพื่อนำมาแก้ไขข้อมูล

$ID = $_GET['ID'];
$objDB = mssql_select_db("work1");
$data = mssql_query("SELECT * FROM about WHERE ID={$ID}")
    or die(mssql_error());

?>

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

    .ass {
        background-color: #C7C7BB;
        width: 45%;
        padding: 20px;
        border: 17px solid #2A505A;
        text-align: left;

    }
</style>

<body>
    <a href="indexname.php">ย้อนกลับ</a>
    <?php
    while ($info = mssql_fetch_array($data)) {
        $image = iconv("tis-620", "utf-8", $info['Image']);
        $position = iconv("tis-620", "utf-8", $info['Position']);
        $name = iconv("tis-620", "utf-8", $info['Name']);
        $lastname = iconv("tis-620", "utf-8", $info['Lastname']);
        $department = iconv("tis-620", "utf-8", $info['Department']);
        $role = iconv("tis-620", "utf-8", $info['Role']);
    ?>

        <form action="updatename.php?ID=<?php echo $info['ID']; ?>" method="POST" enctype="multipart/form-data">
            <br>
            <br>
            <div align="center">
                <h2>ฟอร์มแก้ไขข้อมูลคณะกรรมการกิจการสัมพันธ์</h2>
                <br>
                <div align="center">
                    <div class="ass">
                        <table>
                            <tr>
                                <td>
                                    <label for="text">รหัส</label><br>
                                    <input type="text" name="ID" value="<?php echo $ID; ?>" />
                                <td>
                            </tr>
                        </table>
                        <br>
                        <table align="center" width="700">
                            <tr>
                                <td>
                                    <label for="text">ตำแหน่ง</label><br>
                                    <input type="text" placeholder="ตำแหน่ง" name="position" value="<?php echo $position; ?>" />
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table align="center" cellpadding="2" width="700">
                            <tr>
                                <td>
                                    <label for="text">ชื่อ</label><br>
                                    <input type="text" placeholder="ชื่อ" name="name" value="<?php echo $name; ?>" />
                                <td>
                                    <label for="text">นามสกุล</label><br>
                                    <input type="text" placeholder="นามสกุล" name="lastname" value="<?php echo $lastname; ?>" />
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table align="center" cellpadding="2" width="700">
                            <tr>
                                <td>
                                    <label for="text">แผนก</label><br>
                                    <select name="department" value="<?php echo $department; ?>"
                                        <option value="-">แผนก</option>
                                        <option value="ผู้แทนฝ่ายนายจ้าง">ผู้แทนฝ่ายนายจ้าง</option>
                                        <option value="ผู้แทนฝ่ายลูกจ้าง">ผู้แทนฝ่ายลูกจ้าง</option>
                                    </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <td>
                                    <label for="text">บทบาทหน้าที่</label><br>
                                    <input type="text" placeholder="บทบาทหน้าที่" name="role"  value="<?php echo $role; ?>" />
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table align="center" cellpadding="2" width="700">
                            <tr>
                                <td>
                                    <label for="text">รูปภาพ</label><br>
                                    <input type="file" name="image" value="<?php echo $image; ?>" />
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table align="center" cellpadding="2" width="700">
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Upload" />&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="reset" name="submit" value="Cancel" />
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
        </form>

    <?php } ?>
</body>

</html>