<?php 
$image = iconv("utf-8", "tis-620", $_FILES['image']['name']);
$tmp_name = $_FILES['image']['tmp_name'];

$details = iconv("tis-620", "utf-8", $info['Details']);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO law";
$strSQL.="(image,details)";
$strSQL.="VALUES";
$strSQL.="('" . $details . "')"; 
$strSQL.= mssql_query($strSQL);

//upload file in folder
move_uploaded_file($tmp_name,"../uploads/".$_FILES['image']['name']);

?>

<script type="text/javascript">
    window.location = "indexlaw.php";
</script>