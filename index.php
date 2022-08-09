<?
session_start();
error_reporting(0);
include("includes/config.inc.php");
$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
  $selected2 = "class='selected'";
  if ($Submenu == "name") {
    $Fileshow = "name.php";
  } else if ($Submenu == "role") {
    $Fileshow = "role.html";
  }
  
} else if ($Menu == "2") {
  $selected2 = "class='selected'";
  if ($Submenu == "news2") {
    $Fileshow = "news2.php";
  } else if ($Submenu == "appointment") {
    $Fileshow = "appointment.php";
  }

} else if ($Menu == "3") {
  $selected3 = "class='selected'";
  if ($Submenu == "meet") {
    $Fileshow = "meet.php";
  } 

} else if ($Menu == "4") {
  $selected4 = "class='selected'";
  if ($Submenu == "law") {
    $Fileshow = "law.php";
  } else if ($Submenu == "imperative") {
    $Fileshow = "imperative.php";
  }
  else if ($Submenu == "labor") {
    $Fileshow = "labor.php";
  }
}

else if ($Menu == "5") {
  $selected4 = "class='selected'";
  if ($Submenu == "comment") {
    $Fileshow = "comment.php";
  } else if ($Submenu == "qa") {
    $Fileshow = "qa.php";
  }
}

else{
  $Fileshow = "news2.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  <title>คณะกรรมการกิจการสัมพันธ์</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
 
</head>

<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Main -->
    <div id="main">
      <div class="inner">

        <!-- Header -->
        <header id="header">
          <div class="logo">
            <a href="index.html">คณะกรรมการกิจการสัมพันธ์</a>
          </div>
        </header>

        <div class="content">
          <?
          include($Fileshow);
          ?>
       
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">

      <div class="inner">

        <!-- Search Box -->


        <!-- Menu -->
        <nav id="menu">
          <ul>

            <li>
              <span class="opener">เกี่ยวกับคณะกรรมการกิจการสัมพันธ์</span>
              <ul>
                <li>
                  <a class="sub-menu" onclick="location. href='index.php?Menu=1&Submenu=name';">ข้อมูลรายชื่อคณะกรรมการ </a>
                  <a class="sub-menu" onclick="location. href='index.php?Menu=1&Submenu=role';">บทบาทหน้าที่ของคณะกรรมการ</a>
                </li>
              </ul>
            </li>

            <li>
              <span class="opener">ข้อมูลข่าวสาร กิจกรรม ตารางการประชุม <br> ภาพการประชุม</span>
              <ul>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=2&Submenu=news2';">ข่าวสาร/กิจกรรม/การประชุม</a></li>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=2&Submenu=appointment';">ตารางการประชุม</a></li>
              </ul>
            </li>
        
              <ul>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=3&Submenu=meet';">รายงานการประชุมคณะกรรมการกิจการสัมพันธ์</a></li>
              </ul>
      
            <li>
              <span class="opener">รวมกฎหมายแรงงานรัฐวิสาหกิจ</span>
              <ul>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=4&Submenu=labor';">พระราชบัญญัติแรงงานรัฐวิสาหกิจสัมพันธ์ </a></li>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=4&Submenu=law';">กฎหมายแรงงานรัฐวิสาหกิจที่เกี่ยวข้อง</a></li>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=4&Submenu=imperative';">ระเบียบหรือข้อบังคับ วว. </a></li>
              </ul>
            </li>
            
            <li>
              <span class="opener">ยื่นข้อร้องเรียน/Q&A</span>
              <ul>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=5&Submenu=comment';">ยื่นข้อร้องเรียน</a></li>
                <li><a class="sub-menu" onclick="location.href='index.php?Menu=5&Submenu=qa';">Q&A</a></li>
              </ul>
            </li>
         
          </ul>
        </nav>
      </div>
    </div>
  </div>
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/transition.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/custom.js"></script>
</body>


</body>

</html>