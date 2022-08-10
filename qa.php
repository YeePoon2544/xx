<?php
$data = mssql_query("SELECT * FROM qa ");

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  
    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgb(64, 170, 216);
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

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

    .container {
      border-radius: 5px;
      background-color: #dde0f2;
      padding: 20px;

      background: linear-gradient(to top, #F3D6CE 15%, #ffffff 100%);
    }

    .centered {
      text-align: center;
      width: 40%;
      height: 4%;
      border: double 5px rgb(241, 160, 160);
      border-radius: 5px;
    }

    .tb {
      border-collapse: collapse;
      width: 100%;
      justify-content: center;
      border-spacing: 30px;
    }

    .td1 {
      background-color: #fcecd1;
      border: 1px solid rgb(0, 0, 0);
      padding-left: 30px;
      font-size: 16px;
    }

    .td2 {
      background-color: #ffffff;
      border: 1px solid rgb(0, 0, 0);
    }

    .ddiv {
      font-size: 12px;
    }

    .a1 {
      font-size: 14px;
    }

    .td3 {
      background-color: #ffffff;
      border: 1px solid rgb(0, 0, 0);
      padding-left: 30px;
    }
  </style>

</head>

<body>

  <form action="./qa/storeqa.php" method="POST">

    <div class="container">
      <h3 class="centered">ถาม-ตอบ Q&A</h3><br>
      <label for="text">คำถาม</label>
      <input type="text" name="question" placeholder="พิมพ์คำถาม...">
      <input type="submit" value="ส่ง">
    </div>

    <div>
      <? while ($info = mssql_fetch_array($data)) {
        $question = iconv("tis-620", "utf-8", $info['Question']);
        $answer = iconv("tis-620", "utf-8", $info['Answer']);
        $day = iconv("tis-620", "utf-8", $info['Day']);
        $dayout = iconv("tis-620", "utf-8", $info['Dayout']);
      ?>
        <table class="tb">


          <tr>
            <td class="td1">คำถาม : <a class="a1"><?php echo  $question; ?></a>
              <hr width="95%">
              <div class="ddiv">
                <p>ถามเมื่อ : <a class="a1"><?php echo  $day; ?></p>

              </div>
            </td>
          </tr>

          <tr>
            <td class="td3">คำตอบ : <a class="a1"><?php echo  $answer; ?></a>
              <hr width="95%">
              <div class="ddiv">
                <p>ตอบเมื่อ : <a class="a1"><?php echo  $dayout; ?></p>

              </div>
            </td>
          </tr>
        </table>
      <?php } ?>
    </div>
</body>