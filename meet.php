<?php

$sql        = "SELECT *FROM meet WHERE Status ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);

// $sql2        = "SELECT *FROM meet WHERE Status ='2'";
// $result2     = $db_tm->sql_query($sql);
// $rows2       = $db_tm->sql_fetchrow($result);

// $sql3        = "SELECT *FROM meet WHERE Status ='3'";
// $result3     = $db_tm->sql_query($sql);
// $rows3       = $db_tm->sql_fetchrow($result);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ตารางการนัดการประชุม</title>
</head>
<style>
    td {
        text-align: center;
        font-size: 16px;
        padding: 5px;
        background: -webkit-linear-gradient(rgb(150, 158, 245), rgb(249, 249, 249));
    }

    img {
        height: 150px;
        width: 100px;
        /* box-shadow: 0 0 40px rgb(33, 65, 96); */
    }

    .zoom {
        width: 100px;
        height: auto;
    }

    .zoom:hover {
        transform: scale(1.5);
    }
</style>

<body>
    <div align="center">
        <img src="images/vv.png" border="3" style="width:70%;">
    </div>
    <br> <br>

    <table align="left" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="images/1.1.png" alt=""></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 1.2565.pdf" download/Download File>Download
            </td></a>
        </tr>
        </div>
    </table>

    <table align="right" width="50%">
        <tr>
            <td width="15%"><img class="zoom" src="images/2.2.png" alt=""></td>
            <td width="30%">รายงานการประชุม ครั้งที่ 2/2565 <br><br> วันอังคาร ที่ 9 พฤศจิกายน พ.ศ. 2564
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 2.2565.pdf" download/Download File>Download
            </td></a>
        </tr>
        </div>
    </table>

    <table align="left" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="images/3.3.png" alt=""></td>
            <td width="30%">รายงานการประชุม ครั้งที่ 3/2565 <br><br> วันอังคาร ที่ 8 กุมภาพันธ์ พ.ศ. 2565
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 3.2565.pdf" download/Download File>Download
            </td></a>
        </tr>
        </div>
    </table>

    <table align="right" width="50%">
        <tr>
            <td width="15%"><img class="zoom" src="images/4.4.png" alt=""></td>
            <td width="30%">รายงานการประชุม ครั้งที่ 4/2565 <br><br> วันอังคาร ที่ 15 มีนาคม พ.ศ. 2565
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 4.2565.pdf" download/Download File>Download
            </td></a>
        </tr>
        </div>
    </table>

    <table align="left" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="images/5.5.png" alt=""></td>
            <td width="30%">รายงานการประชุม ครั้งที่ 5/2565<br><br> วันอังคาร ที่ 19 เมษายน พ.ศ. 2565
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 5.2565.pdf" download/Download File>Download
            </td></a>
        </tr>
        </div>
    </table>

    <table align="right" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="images/6.6.png" alt=""></td>
            <td width="30%">รายงานการประชุม ครั้งที่ 6/2565<br><br> วันอังคาร ที่ 17 พฤษภาคม พ.ศ. 2565
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 6.2565 final.pdf" download/Download File>Download
            </td></a>
        </tr>
        </div>
    </table>

</body>

</html>