<?php

$answer = iconv("utf-8", "tis-620", $_POST['answer']);
$question = iconv("utf-8", "tis-620", $_POST['question']);

$objDB = mssql_select_db("work1");
$strSQL = "INSERT INTO qa";
$strSQL .= "(answer,question,day)";
$strSQL .= "VALUES";
$strSQL .= "('" . $answer . "','" . $question . "',GETDATE())";
$strSQL .= mssql_query($strSQL);

?>

<script type="text/javascript">
    window.location = "../index.php?Menu=5&Submenu=qa";
</script>