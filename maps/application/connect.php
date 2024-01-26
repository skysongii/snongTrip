<?php
    $host   = "localhost";
    $user   = "snong";
    $pw     = "1234";
    $dbName = "ssnong";

    $con = mysqli_connect($host, $user, $pw, $dbName);

    if(mysqli_errno($con)) {
        echo "에러 : ", mysqli_connect_error();
    } else {
        echo "성공";
    }

    
