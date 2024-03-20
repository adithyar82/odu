<?php
session_start();
require_once(__DIR__ . "/vendor/autoload.php");
ini_set('display_errors', 0);
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
define("dbUser", getenv("dbUser"));
define("dbPass", getenv("dbPass"));
define("dbName", getenv("dbName"));
define("dbHost", getenv("hostname"));
define("absolutePathAfterBaseDir", getenv("absolutePathAfterBaseDir"));
define("absoluteURL", getenv("absoluteURL"));
define("captcha", getenv("captchaKey"));
?>