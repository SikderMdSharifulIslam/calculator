<?php
    // echo date("d/m/Y");
    // echo "<br>";
    // echo date("Y/m/d");
    // echo date("h");
    // echo date("H");
    // echo "<br>";
    // echo date("i");
    // echo "<br>";
    // echo date("s");

    date_default_timezone_set('Asia/Dhaka');
    $currentDate = date('Y-m-d');
    $currentTime = date('H:i:s A');
    echo "Current Date: " . $currentDate . "<br>";
    echo "Current Time: " . $currentTime;
?>