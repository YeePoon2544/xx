<?php
$sql        = "SELECT *FROM law WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);

$sql2        = "SELECT *FROM law WHERE ID ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$numrows2    = $db_tm->sql_numrows($result2);

$sql3        = "SELECT *FROM law WHERE ID ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($resul3);
$numrows3    = $db_tm->sql_numrows($result3);

$sql4        = "SELECT *FROM law WHERE ID ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($resul4);
$numrows4    = $db_tm->sql_numrows($result4);
echo "</tables>";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ฉบับกฎหมายแรงงาน</title>
</head>
<style>
  text {
    /* font-family: EkkamaiNew; */
    font-size: 18px;
    color: rgb(2, 30, 80);
  }

  h1 {
    border: 8px solid #629cf2;
    width: 150px;
    border-radius: 45px;
    text-align: center;
    color: rgb(255, 255, 255);
    font-size: 27px;
    background-color: rgb(6, 45, 123);
    margin-left: 10px;
    margin-top: 40px;
    padding: 7px;
    width: 30%;
    margin: 0 auto;
    font-size: 22px;
    /* border-radius: 15px; */

  }

  #myImg {
    border-radius: 7px;

  }

  * {
    box-sizing: border-box;
  }

  .column {
    float: left;
    padding: 10px;
    /* height: 300px; */
  }

  .left {
    width: 50%;
    font-size: 20px;
    text-align: center;
  }

  .right {
    width: 50%;
    font-size: 20px;
    text-align: center;

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
  <h1>กฎหมายแรงงานรัฐวิสาหกิจที่เกี่ยวข้อง</h1>
  <br><br>
  <div class="row">
    <div class="column left">
      <div align="center"><img class="zoom" src="images/1.jpg" id="myImg" style="width:20%;max-width:100px aling-center "></div><br>
      <text><? echo iconv("tis-620", "utf-8", $rows['Details']);?><text><br>
          <a href="pdf2/ยกเลิกประกาศครรส.PDF" download/Download File>Download</a>
          <br><br>
          <div align="center"><img class="zoom" src="images/2.1.png" id="myImg" style="width:20%;max-width:100px aling-center "></div><br>
          <text><? echo iconv("tis-620", "utf-8", $rows2['Details']);?><text><br>
              <a href="pdf2/ค่ารักษาพยาบาล.PDF" download/Download File>Download</a>
    </div>

    <div class="column right">
      <div align="center"><img class="zoom" src="images/เด็ก.png" id="myImg" style="width:20%;max-width:100px aling-center "></div><br>
      <text><? echo iconv("tis-620", "utf-8", $rows3['Details']);?><text><br>
          <a href="pdf2/ค่าช่วยเหลือบุตร.PDF" download/Download File>Download</a>
          <br><br><br><br>
          <div align="center"><img class="zoom" src="images/3_0.png" id="myImg" style="width:20%;max-width:100px aling-center "></div><br>
          <text><? echo iconv("tis-620", "utf-8", $rows4['Details']);?>
            <text><br>
              <a href="pdf2/ค่ารักษาโควิด.PDF" download/Download File>Download</a>
    </div>
  </div>
</body>

</html>