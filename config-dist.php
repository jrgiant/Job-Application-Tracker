<?php
unset($CFG);
global $CFG;

$CFG = new stdClass();
$CFG->dbType = "mysql";
$CFG->dbName = "jobapp";
$CFG->dbUser = "jobapp";
$CFG->dbPass = "Pa$$w0rd";
$CFG->dbHost = "localhost";


$CFG->appName = "Job Application Tracker";
