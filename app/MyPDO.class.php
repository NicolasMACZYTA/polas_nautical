<?php
include "DBconfig.php";
class MyPDO{
    private static $db = null;
    public static function getInstance(){
        if (self::$db == null){
            self::$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_BASE.";charset=utf8",DB_USER,DB_PASSWORD);
        }
        return self::$db;
    }

}
?>