<?php
$sql        = "SELECT *FROM labor WHERE ID ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);



echo "</tables>";
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</title>

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

  .left {
    width: 100%;
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
  <h1>พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์</h1>
  <br>
  <div class="row">
    <div class="column left">

      <div align="center"><img class="zoom" src="images/mm.png" id="myImg" style="width:20%;max-width:100px aling-center "></div><br>
      <text><? echo iconv("tis-620", "utf-8", $rows['Details']);?><text><br>
          <a href="pdf1/พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์  พ.ศ. 2543.pdf" download/Download File>Download</a>
    </div>
  </div>
</body>

</html>