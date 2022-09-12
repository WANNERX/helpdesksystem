<?php
session_start();
include 'config.php';
define('HOST', $host);
define('USER', $username);
define('PASSWORD', $password);
define('DATABASE', $database);
require 'class/Database.php';
require 'class/Users.php';
require 'class/Reports.php';
require 'class/Repairtypes.php';
$database = new Database;
$users = new Users;
$repairtype = new Repairtype;
$reports = new Reports;
?>
