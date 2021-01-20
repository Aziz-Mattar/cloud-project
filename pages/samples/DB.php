<?php
class Database
{
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "us-cdbr-east-02.cleardb.com";
    private $_username = "b4f3f509d2580f";
    private $_password = "a68c3b8f";
    private $_database = "heroku_4196bc487855ef1";
    /*private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "management";*/
    public static function getInstance()
    {
        if (!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __construct()
    {
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
        }
    }
    private function __clone()
    {
    }
    public function getConnection()
    {
        return $this->_connection;
    }
}
?>