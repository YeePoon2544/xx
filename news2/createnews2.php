<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>เพิ่มข้อมูลข้อมูลข่าวสาร</title>
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

    .add {
        background-color: lightgrey;
        width: 45%;
        padding: 25px;
        border: 20px solid saddlebrown;
        margin: 25px;
        text-align: left;

    }
</style>
<boby>
    <a href="indexnews2.php">ย้อนกลับ</a>
    <form action="storenews2.php" method="POST" enctype="multipart/form-data"><br>
        <div align="center">
            <h2 align="center">เพิ่มข้อมูลข่าวสาร</h2>
            <div align="center">
                <div class="add">
                    <table align="center" width="700">
                        <tr>
                            <td>
                                <label for="text">รูปภาพ</label><br>
                                <input input type="file" name="image">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table align="center" cellpadding="2" width="700">
                        <tr>
                            <td>
                                <label for="text">วัน เดือน ปี</label><br>
                                <input type="text" placeholder="วว/ดด/ปป" name="day" />
                            <td>
                                <label for="text">ชื่อข่าวสาร</label><br>
                                <input type="text" placeholder="ชื่อข่าวสาร" name="header">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table align="center" cellpadding="2" width="700">
                        <tr>
                            <td>
                                <label for="text">รายละเอียดของข่าว</label><br>
                                <textarea type="text" placeholder="รายละเอียดของข่าว" style="height:200px" width="60%" name="news"></textarea>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table align="center" cellpadding="2" width="700">
                        <tr>
                            <td>
                                <input type="submit" name="submit" value="submit" />&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="reset" name="submit" value="Cancel" />
                            </td>

                        </tr>
                    </table>
                </div>
            </div>
    </form>


    </body>

</html>