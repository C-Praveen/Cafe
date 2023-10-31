<?php

// After uploading to online server, change this connection accordingly

$con = mysqli_connect("mysql.selfmade.ninja", "PraveenC", "Praveen@2003", "PraveenC_sample");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
