<?php

$sql        = "SELECT *FROM meet WHERE Status ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
$image      = $rows['Image'];
$path       = '../xx/images/';

$sql2        = "SELECT *FROM meet WHERE ID ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$numrows2    = $db_tm->sql_numrows($result2);
$image2      = $rows2['Image'];
$path2       = '../xx/images/';

$sql3        = "SELECT *FROM meet WHERE ID ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($resul3);
$numrows3    = $db_tm->sql_numrows($result3);
$image3      = $rows3['Image'];
$path3       = '../xx/images/';

$sql4        = "SELECT *FROM meet WHERE ID ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($resul4);
$numrows4    = $db_tm->sql_numrows($result4);
$image4      = $rows4['Image'];
$path4      = '../xx/images/';

$sql5        = "SELECT *FROM meet WHERE ID ='5'";
$result5     = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($resul5);
$numrows5   = $db_tm->sql_numrows($result5);
$image5      = $rows5['Image'];
$path5       = '../xx/images/';

$sql6        = "SELECT *FROM meet WHERE ID ='6'";
$result6     = $db_tm->sql_query($sql6);
$rows6       = $db_tm->sql_fetchrow($resul6);
$numrows6    = $db_tm->sql_numrows($result6);
$image6      = $rows6['Image'];
$path6       = '../xx/images/';

echo "</tables>";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ตารางการนัดการประชุม</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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

            <td width="15%"><img class="zoom" src="<? echo $path . $image; ?>" ></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 1.2565.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
            </td></a>
        </tr>
        </div>
    </table>

    <table align="right" width="50%">
        <tr>
            <td width="15%"><img class="zoom" src="<? echo $path2 . $image2; ?>" ></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows2['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows2['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 2.2565.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
            </td></a>
        </tr>
        </div>
    </table>

    <table align="left" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="<? echo $path3 . $image3; ?>"></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows3['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows3['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 3.2565.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
            </td></a>
        </tr>
        </div>
    </table>

    <table align="right" width="50%">
        <tr>
            <td width="15%"><img class="zoom" src="<? echo $path4 . $image4; ?>"></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows4['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows4['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 4.2565.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
            </td></a>
        </tr>
        </div>
    </table>

    <table align="left" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="<? echo $path5 . $image5; ?>"></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows5['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows5['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 5.2565.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
            </td></a>
        </tr>
        </div>
    </table>

    <table align="right" width="50%">
        <tr>

            <td width="15%"><img class="zoom" src="<? echo $path6 . $image6; ?>"></td>
            <td width="30%"><? echo iconv("tis-620", "utf-8", $rows6['Details']);
                            echo '&nbsp'; ?><br><br><? echo iconv("tis-620", "utf-8", $rows6['Day']); ?>
                <br><br>
                <a href="pdf/รายงานการประชุม ครั้งที่ 6.2565 final.pdf" download/Download File><i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
            </td></a>
        </tr>
        </div>
    </table>

</body>

</html>