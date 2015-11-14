<?php

include_once 'db-connect.php.ini';

$sql = "INSERT INTO guestAddress (fullname, line-1, line-2, line-3, line-4, message)
VALUES ('$_POST["fullname"]', '$_POST["line-1"]', '$_POST["line-2"]','$_POST["line-3"]', '$_POST["line-4"]', '$_POST["message"]')";
?>
