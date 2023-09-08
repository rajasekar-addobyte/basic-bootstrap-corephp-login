<?php
require "includes/config.php";
check_logged_in();
session_destroy();

redirect('index.php');