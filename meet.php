<?
$data = mssql_query("SELECT *FROM meet where status='1' ");

// $sql2        = "SELECT *FROM meet WHERE ID ='2'";
// $result2     = $db_tm->sql_query($sql2);
// $rows2       = $db_tm->sql_fetchrow($result2);
// $numrows2    = $db_tm->sql_numrows($result2);

// $sql3       = "SELECT *FROM meet WHERE ID ='3'";
// $result3     = $db_tm->sql_query($sql3);
// $rows3       = $db_tm->sql_fetchrow($result3);
// $numrows3    = $db_tm->sql_numrows($result3);

// $sql4        = "SELECT *FROM meet WHERE ID ='4'";
// $result4     = $db_tm->sql_query($sql4);
// $rows4       = $db_tm->sql_fetchrow($result4);
// $numrows4    = $db_tm->sql_numrows($result4);

// $sql5        = "SELECT *FROM meet WHERE ID ='5'";
// $result5     = $db_tm->sql_query($sql5);
// $rows5       = $db_tm->sql_fetchrow($result5);
// $numrows5    = $db_tm->sql_numrows($result5);

// $sql6        = "SELECT *FROM meet WHERE ID ='6'";
// $result6     = $db_tm->sql_query($sql6);
// $rows6       = $db_tm->sql_fetchrow($result6);
// $numrows6    = $db_tm->sql_numrows($result6);
// ข้างบนคือการดึงแบบตรงๆ


echo "</tables>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

</head>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
<style>
    body {
        font-family: 'Prompt', sans-serif;

    }

    img {
        height: 150px;
        width: 100px;
    }

    .zoom {
        width: 100px;
        height: auto;
    }

    .zoom:hover {
        transform: scale(1.5);
    }

    td {
        background-color: #EBECE7;
        text-align: center;

    }

    th {
        text-align: center;
        background-color: #75464A;
        color: white;
    }
</style>

<body>

    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>รายงานการประชุม</th>
                    <th>หัวเรื่องรายงาาน</th>
                    <th>ไฟล์แนบ</th>
                </tr>
            </thead>

            <tbody>
                <? while ($info = mssql_fetch_array($data)) {
                    $details = iconv("tis-620", "utf-8", $info['Details']);
                    $day = iconv( "tis-620", "utf-8", $info['Day']);
                    $image = iconv( "tis-620", "utf-8", $info['Image']);
                    $filename = iconv( "tis-620", "utf-8", $info['Filename'])
                ?>

                    <tr>
                        <td width="30%"><img class="zoom" id="showimg" src="uploads/<?php echo $image ?>"></td>
                        <td><br><br><?php echo $details; ?><br><br><?php echo $day; ?>
                            <br><br>
                        </td>

                        <td><br><br><button type="button" class="btn btn-outline-primary"><a href="uploads/<?php echo $filename?>" download/Download File>Download </a>
                            </button></td>
                    </tr> <?php } ?>

                <!-- <tr>
                    <td width="15%"><img class="zoom" src="images/2.2.png" alt=""></td>
                    <td><br><br><? echo iconv("tis-620", "utf-8", $rows2['Details']); ?><br><br><? echo iconv("tis-620", "utf-8", $rows2['Day']); ?>
                        <br><br>
                    </td>
                    <td><br><br><button type="button" class="btn btn-outline-primary  "><a href="pdf/รายงานการประชุม ครั้งที่ 2.2565.pdf" download/Download File>Download
                        </button></td>
                </tr>
                <tr>
                    <td width="15%"><img class="zoom" src="images/3.3.png" alt=""></td>
                    <td><br><br><? echo iconv("tis-620", "utf-8", $rows3['Details']); ?><br><br><? echo iconv("tis-620", "utf-8", $rows3['Day']); ?>
                        <br><br>
                    </td>
                    <td><br><br><button type="button" class="btn btn-outline-primary"><a href="pdf/รายงานการประชุม ครั้งที่ 3.2565.pdf" download/Download File>Download
                        </button></td>
                </tr>
                <tr>
                    <td width="15%"><img class="zoom" src="images/4.4.png" alt=""></td>
                    <td><br><br><? echo iconv("tis-620", "utf-8", $rows4['Details']); ?><br><br><? echo iconv("tis-620", "utf-8", $rows4['Day']); ?>
                        <br><br>
                    </td>
                    <td><br><br><button type="button" class="btn btn-outline-primary"><a href="pdf/รายงานการประชุม ครั้งที่ 4.2565.pdf" download/Download File>Download
                        </button></td>
                </tr>
                <tr>
                    <td width="15%"><img class="zoom" src="images/5.5.png" alt=""></td>
                    <td><br><br><? echo iconv("tis-620", "utf-8", $rows5['Details']); ?><br><br><? echo iconv("tis-620", "utf-8", $rows5['Day']); ?>
                        <br><br>
                    </td>
                    <td><br><br><button type="button" class="btn btn-outline-primary"><a href="pdf/รายงานการประชุม ครั้งที่ 5.2565.pdf" download/Download File>Download
                        </button></td></a></td>
                </tr>
                <tr>
                    <td width="15%"><img class="zoom" src="images/6.6.png" alt=""></td>
                    <td><br><br><? echo iconv("tis-620", "utf-8", $rows6['Details']); ?><br><br><? echo iconv("tis-620", "utf-8", $rows6['Day']); ?>
                        <br><br>
                    </td>
                    <td><br><br><button type="button" class="btn btn-outline-primary"><a href="pdf/รายงานการประชุม ครั้งที่ 6.2565.pdf" download/Download File>Download
                        </button></td>
                </tr> -->
            </tbody>
        </table>
    </div>

</body>

</html>