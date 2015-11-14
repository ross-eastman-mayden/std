<?php

include_once 'psl-config.ini.php';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

if ($mysqli->connect_errno) {

$mysqli = new mysqli(BACKUP_HOST, BACKUP_USER, BACKUP_PASSWORD, BACKUP_DATABASE);
}

if ($mysqli->connect_errno) {
printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}
