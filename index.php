<?php
require 'header.php';
require "db/db.php";

$db = new DB();
$db->testLink();
require 'footer.php';

?>    
