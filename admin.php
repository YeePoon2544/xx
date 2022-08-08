<?

include("includes/config.inc.php");
$Menu  = $_REQUEST['Menu'];
$Submenu = $_REQUEST['Submenu'];
if ($Menu == "1") {
    $selected2 = "class='selected'";
    if ($Submenu == "indexname") {
        $Fileshow = "name/indexname.php";
    } else if ($Submenu == "indexnews2") {
        $Fileshow = "news2/indexnews2.php";
    }
    
} else if ($Menu == "2") {
    $selected2 = "class='selected'";
    if ($Submenu == "indexappointment") {
        $Fileshow = "appointment/indexappointment.php";
    } else if ($Submenu == "index") {
        $Fileshow = "meet/index.php";
    }
} else if ($Menu == "3") {
    $selected3 = "class='selected'";
    if ($Submenu == "indexlabor") {
        $Fileshow = "labor/indexlabor.php";
    } else if ($Submenu == "indexlaw") {
        $Fileshow = "law/indexlaw.php";
    }
} else if ($Menu == "4") {
    $selected4 = "class='selected'";
    if ($Submenu == "indeximperative") {
        $Fileshow = "imperative/indeximperative.php";
    } else if ($Submenu == "#") {
        $Fileshow = "#";
    }
} else if ($Menu == "5") {
    $selected4 = "class='selected'";
    if ($Submenu == "indexcomment") {
        $Fileshow = "comment/indexcomment.php";
    } else if ($Submenu == "indexqa") {
        $Fileshow = "qa/indexqa.php";
    }
} else {
    $Fileshow = "name/indexname.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Poppins", sans-serif
        }

        body {
            font-size: 16px;

        }

        .w3-sidebar {
            background-color: #293242;
            z-index: 3;
            width: 300px;
            font-weight: bold;
            color: white;
           
        }
       
       
    </style>
</head>

<body>


    <!-- Sidebar/menu -->
    <nav class="w3-sidebar  w3-collapse w3-top w3-large w3-padding" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
            <h3 class="w3-padding-64"><b>Database</b></h3>
        </div>
        <div class="w3-bar-block">
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location. href='admin.php?Menu=1&Submenu=indexname';">ข้อมูลกิจการสัมพันธ์</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location. href='admin.php?Menu=1&Submenu=indexnews2';">ข้อมูลข่าวสาร</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location.href='admin.php?Menu=2&Submenu=indexappointment';">ตารางการนัดประชุม</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location. href='admin.php?Menu=2&Submenu=index';">ข้อมูลรายงานการประชุม</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location. href='admin.php?Menu=3&Submenu=indexlabor';">ข้อมูลพระราชบัญญัติ</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location.href='admin.php?Menu=3&Submenu=indexlaw';">ข้อมูลกฎหมายแรงงานรัฐวิสาหกิจ</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location.href='admin.php?Menu=4&Submenu=indeximperative';">ข้อมูลระเบียบ วว.</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location.href='admin.php?Menu=5&Submenu=indexcomment';">ข้อมูลร้องเรียน</a>
            <a class="sub-menu w3-bar-item w3-button w3-hover-white" onclick="location.href='admin.php?Menu=5&Submenu=indexqa';">ข้อมูลถามตอบ</a>

        </div>
    </nav>

    <!-- Top menu on small screens -->
    <!-- <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
        <span>Company Name</span>
    </header> -->

    <!-- Overlay effect when opening sidebar on small screens -->
    <!-- <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> -->

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">
<!-- <img src="./images/header.png" style="width:100%; height: 300px;  opacity: 40%;"> -->
        <?
        include($Fileshow);
        ?>

    </div>



    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>

</body>

</html>