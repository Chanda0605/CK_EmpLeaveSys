<?php 
    define('DB_HOST','ckempleavesystemweb-server.mysql.database.azure.com');
    define('DB_USER','mfpzhemtcc');
    define('DB_PASS','MASMW6K5G464X4LW$');
    define('DB_NAME','ckempleavesystemweb-database');
    
    try
    {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
        catch (PDOException $e)
    {
        echo "Looks like you don't have any database/connection for this project. Please check your Database Connection and Try Again! </br>";
        exit("Error: " . $e->getMessage());
    }
?>