<?php
unset($CFG);
global $CFG;

$CFG = new stdClass();
// Database informaiton

$CFG->dbType = "mysql";
$CFG->dbName = "DatabaseName";
$CFG->dbUser = "DBUserName";
$CFG->dbPass = "DBPassword";
$CFG->dbHost = "LocalHost OR DB host";

// General Information
$CFG->appName = "Job Application Tracker";
$CFG->rootdir = dirname(__FILE__);

function print_to_javascript_console($msg){
    echo '<script type="text/javascript">console.log(`'.$msg.'`)</script>';
}
