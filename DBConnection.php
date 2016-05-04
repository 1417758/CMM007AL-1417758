<?php
$db1 = new mysqli(
    "us-cdbr-azure-southcentral-e.cloudapp.net",
    "be31e1c134797a",
    "d1447901",
    "MY1417758"
);
// test if connection was established, and print any errors
if (!$db1) {
    echo "error 2";
    die('Connect Error: ' . mysqli_connect_errno());
}

?>