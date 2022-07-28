<?php

    $dbhost		= "LAPTOP-51QGBUVJ";
    $dbuser		= "sa";
    $dbpasswd	= "123456";
    $dbname		= "work1";
    include("mssql.php");
    $db_tm = new sql_db($dbhost, $dbuser, $dbpasswd, $dbname, false);
    
?>