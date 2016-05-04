<?php
$db1 = new mysqli(
    "us-cdbr-azure-southcentral-e.cloudapp.net",
    "b905a3d391079c",
    "dc98db67",
    "CMM007ALDB-1417758"
);
// test if connection was established, and print any errors
if (!$db1) {
    echo "error 2";
    die('Connect Error: ' . mysqli_connect_errno());
}//else
    //echo "connected successfully";

?>