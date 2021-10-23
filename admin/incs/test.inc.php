<?php

require "dbh.inc.php";
$sql = "INSERT INTO post(PostName) VALUE('me');";
mysqli_query($conn, $sql);
