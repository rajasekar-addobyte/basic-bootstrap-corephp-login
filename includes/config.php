<?php
require "Session.php";
require "Database.php";
require "Common.php";


$session = new Session();

$base_url = "http://localhost/project/";

$app_name = "Project";

$common = new Common($base_url);

$db = new Database("localhost", "root", "root", "project");
$db->connect();

require "functions.php";