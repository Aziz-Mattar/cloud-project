<?php
$filepath = realpath(dirname(__FILE__));
require_once($filepath . "/DB.php");
$db     = Database::getInstance();
$conn = $db->getConnection();
?>