<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class DB_CONNECT {

    function __construct() {
        $this->connect();
    }

    function __destruct() {
        $this->close();
    }

    function connect() {

        require_once 'db_config.php';
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
        $db = mysql_select_db(DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
        mysql_query("SET NAMES 'cp1251'");
        return $con;
    }
    function close() {
        mysql_close();
    }
}

?>