<?
$sql        = "SELECT *FROM about WHERE Type ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);

$sql2        = "SELECT *FROM about WHERE Type ='2'";
$result2     = $db_tm->sql_query($sql2);
$rows2       = $db_tm->sql_fetchrow($result2);
$numrows2    = $db_tm->sql_numrows($result2);

$sql3        = "SELECT *FROM about WHERE Type ='3'";
$result3     = $db_tm->sql_query($sql3);
$rows3       = $db_tm->sql_fetchrow($result3);
$numrows3    = $db_tm->sql_numrows($result3);

$sql4        = "SELECT *FROM about WHERE Type ='4'";
$result4     = $db_tm->sql_query($sql4);
$rows4       = $db_tm->sql_fetchrow($result4);
$numrows4    = $db_tm->sql_numrows($result4);

$sql5        = "SELECT *FROM about WHERE Type ='5'";
$result5     = $db_tm->sql_query($sql5);
$rows5       = $db_tm->sql_fetchrow($result5);
$numrows5    = $db_tm->sql_numrows($result5);

$sql6        = "SELECT *FROM about WHERE Type ='6'";
$result6     = $db_tm->sql_query($sql6);
$rows6       = $db_tm->sql_fetchrow($result6);
$numrows6    = $db_tm->sql_numrows($result6);

$sql7        = "SELECT *FROM about WHERE Type ='7'";
$result7     = $db_tm->sql_query($sql7);
$rows7       = $db_tm->sql_fetchrow($result7);
$numrows7    = $db_tm->sql_numrows($result7);

$sql8        = "SELECT *FROM about WHERE Type ='8'";
$result8     = $db_tm->sql_query($sql8);
$rows8       = $db_tm->sql_fetchrow($result8);
$numrows8    = $db_tm->sql_numrows($result8);

$sql9        = "SELECT *FROM about WHERE Type ='9'";
$result9     = $db_tm->sql_query($sql9);
$rows9       = $db_tm->sql_fetchrow($result9);
$numrows9    = $db_tm->sql_numrows($result9);

$sql10        = "SELECT *FROM about WHERE Type ='10'";
$result10     = $db_tm->sql_query($sql10);
$rows10       = $db_tm->sql_fetchrow($result10);
$numrows10    = $db_tm->sql_numrows($result10);

$sql11        = "SELECT *FROM about WHERE Type ='11'";
$result11     = $db_tm->sql_query($sql11);
$rows11       = $db_tm->sql_fetchrow($result11);
$numrows11    = $db_tm->sql_numrows($result11);

$sql12        = "SELECT *FROM about WHERE Type ='12'";
$result12     = $db_tm->sql_query($sql12);
$rows12       = $db_tm->sql_fetchrow($result12);
$numrows12    = $db_tm->sql_numrows($result12);

$sql13        = "SELECT *FROM about WHERE Type ='13'";
$result13     = $db_tm->sql_query($sql13);
$rows13       = $db_tm->sql_fetchrow($result13);
$numrows13    = $db_tm->sql_numrows($result13);

echo "</tables>";
?>

<meta charset="UTF-8">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
  img {

    height: 150px;
    width: 150px;
    border-radius: 500px;

    box-shadow: 0 0 40px rgb(0, 124, 248);
  }

  .div1 {
    font-size: 16px;
    text-align: center;
    justify-content: center;
    color: rgb(17, 67, 88);
  }

  h4 {
    color: brown;
  }
</style>

<body>
  <table align="center" cellpadding="2" width="700">
    <tr align="center">
      <td><img src="images/นายสมพร มั่งมี ประธาน.jpg" alt=""></td>
    </tr>
    <tr align="center">
      <td><? echo iconv("tis-620", "utf-8", $rows['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows['Role']);
          ?>
      </td>
    </tr>
  </table>
  <table align="center" cellpadding="2" width="700">

    <tr height="50">
      <td colspan="2" align="left">ผู้แทนฝ่ายนายจ้าง</td>

    </tr>


    <tr align="center">
      <td width="50%"><img src="images/รอง ผวว.บห. กรรมการ.jpg" alt=""></td>
      <td width="50%"><img src="images/ผอ.วดี.jpg" alt=""></td>
    </tr>

    <tr align="center">
      <td><? echo iconv("tis-620", "utf-8", $rows2['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows2['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows2['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows2['Role']);
          ?> </td>

      <td><? echo iconv("tis-620", "utf-8", $rows3['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows3['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows3['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows3['Role']);
          ?> </td>

    </tr>

    <tr align="center">
      <td width="50%"><img src="images/ผอ.ศคช.jpg" alt=""></td>
      <td width="50%"><img src="images/ผอ.สกค.jpg" alt=""></td>
    </tr>

    <tr align="center">
      <td><? echo iconv("tis-620", "utf-8", $rows4['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows4['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows4['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows4['Role']);
          ?> </td>

      <td><? echo iconv("tis-620", "utf-8", $rows5['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows5['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows5['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows5['Role']);
          ?> </td>

    </tr>
    <tr align="center">
      <td width="50%"><img src="images/ผอ.สบก.jpg" alt=""></td>
      <td width="50%"><img src="images/ผอ.สทบ.jpg" alt=""></td>
    </tr>

    <tr align="center">
      <td><? echo iconv("tis-620", "utf-8", $rows6['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows6['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows6['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows6['Role']);
          ?> </td>

      <td><? echo iconv("tis-620", "utf-8", $rows7['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows7['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows7['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows7['Role']);
          ?> </td>

    </tr>

    <tr height="50">
      <td colspan="2" align="left">ผู้แทนฝ่ายลูกจ้าง</td>
    </tr>

    <tr align="center">
      <td width="50%"><img src="images/อาจหาญ.jpg" alt=""></td>
      <td width="50%"><img src="images/ชญานี.jpg" alt=""></td>
    </tr>

    <tr align="center">
      <td><? echo iconv("tis-620", "utf-8", $rows8['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows8['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows8['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows8['Role']);
          ?> </td>

      <td><? echo iconv("tis-620", "utf-8", $rows9['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows9['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows9['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows9['Role']);
          ?> </td>

    </tr>

    <tr align="center">
      <td width="50%"><img src="images/เอกรัตน์.jpg" alt=""></td>
      <td width="50%"><img src="images/อุทัย.jpg" alt=""></td>
    </tr>

    <tr align="center">

      <td><? echo iconv("tis-620", "utf-8", $rows10['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows10['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows10['Role']);
          ?> </td>

      <td><? echo iconv("tis-620", "utf-8", $rows11['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows11['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows11['Role']);
          ?> </td>

    </tr>
    <tr align="center">
      <td width="50%"><img src="images/ทรงฤทธิ์.jpg" alt=""></td>
      <td width="50%"><img src="images/วรวิทย์.jpg" alt=""></td>
    </tr>

    <tr align="center">
      <td><? echo iconv("tis-620", "utf-8", $rows12['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows12['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows12['Role']);
          ?> </td>

      <td><? echo iconv("tis-620", "utf-8", $rows13['Name']);
          echo '&nbsp';
          echo iconv("tis-620", "utf-8", $rows13['Lastname']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows13['Position']);
          echo '&nbsp';
          echo '<br>';
          echo iconv("tis-620", "utf-8", $rows13['Role']);
          ?> </td>

    </tr>
    <br><br><br>

    </div>

    <table align="center" cellpadding="2" width="700">
      <tr>
        <td width="30%">
          <h4>คำสั่งเเต่งตั้งคณะกรรมการกิจการสัมพันธ์</h4>
          <a href="pdf4/คำสั่งคณะกรรมการสถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย.pdf" download/Download File <i class='far fa-hand-point-right' style='font-size:16px'></i> Download <i class='far fa-hand-point-left' style='font-size:16px'></i>
        </td></a>
      </tr>

</body>
</table>