<?php

include_once '../psl-config.ini.php';


$db = new mysqli ($HOST, $USER, $PASSWORD, $DATABASE);

//if ($mysqli->connect_errno) {
//
//    $mysqli = new mysqli(BACKUP_HOST, BACKUP_USER, BACKUP_PASSWORD, BACKUP_DATABASE);
//}

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$a = $_POST['fullname'];
$b = $_POST['Line1'];
$c = $_POST['Line2'];
$d = $_POST['Line3'];
$e = $_POST['Line4'];
$f = $_POST['message'];

$sql = "INSERT INTO guestAddresses (fullname, line1, line2, line3, line4, message)
VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>

<html>
<head>
    <!-- HTML meta refresh URL redirection -->
    <meta http-equiv="refresh" content="0; url=complete.html">
</head>



