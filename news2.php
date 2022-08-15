<?php

$sql        = "SELECT *FROM news WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);
$image      = $rows['Image'];
$path       = '../xx/images/';

$sql2        = "SELECT *FROM news WHERE ID ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$image2      = $rows2['Image'];
$path2       = '../xx/images/';

$sql3        = "SELECT *FROM news WHERE ID ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($result3);
$image3      = $rows3['Image'];
$path3       = '../xx/images/';

$sql4        = "SELECT *FROM news WHERE ID ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($result4);
$image4      = $rows4['Image'];
$path4       = '../xx/images/';

$sql5        = "SELECT *FROM news WHERE ID ='5'";
$result5     = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($result5);
$image5      = $rows5['Image'];
$path5       = '../xx/images/';

$sql6        = "SELECT *FROM news WHERE ID ='6'";
$result6    = $db_tm->sql_query($sql6);
$rows6       = $db_tm->sql_fetchrow($result6);
$image6      = $rows6['Image'];
$path6       = '../xx/images/';

$sql7        = "SELECT *FROM news WHERE ID ='7'";
$result7    = $db_tm->sql_query($sql7);
$rows7       = $db_tm->sql_fetchrow($result7);
$image7      = $rows7['Image'];
$path7       = '../xx/images/';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ข่าวสาร</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

</head>
<style>
    body {
        font-family: 'Prompt', sans-serif;

    }
    
</style>

<body>

    <div class="w3-row-padding w3-margin-top">

        <div class="w3-third">
            <div class="w3-card">
                <img src="<? echo $path . $image; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.php"><? echo iconv("tis-620", "utf-8", $rows['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows['Day']); ?></a>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<? echo $path2 . $image2; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.2.php"><? echo iconv("tis-620", "utf-8", $rows2['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows2['Day']); ?></a>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<? echo $path3 . $image3; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.3.php"><? echo iconv("tis-620", "utf-8", $rows3['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows3['Day']); ?></a>
                </div>
            </div>
        </div>

    </div>
    <div class="w3-row-padding w3-margin-top">

        <div class="w3-third">
            <div class="w3-card">
                <img src="<? echo $path4 . $image4; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.4.php"><? echo iconv("tis-620", "utf-8", $rows4['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows4['Day']); ?></a>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<? echo $path5 . $image5; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.5.php"><? echo iconv("tis-620", "utf-8", $rows5['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows5['Day']); ?></a>
                </div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card">
                <img src="<? echo $path6 . $image6; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.6.php"><? echo iconv("tis-620", "utf-8", $rows6['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows6['Day']); ?></a>
                </div>
            </div>
        </div>

        <div class="w3-third w3-row-padding w3-margin-top">
            <div class="w3-card">
                <img src="<? echo $path7 . $image7; ?>" style="width:100%">
                <div class="w3-container">
                    <h7><b><a href="news2/news1.7.php"><? echo iconv("tis-620", "utf-8", $rows7['News']); ?></a></b></h7><br><br>
                    <i class="fa fa-calendar-o"> </i> <? echo iconv("tis-620", "utf-8", $rows7['Day']); ?></a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>