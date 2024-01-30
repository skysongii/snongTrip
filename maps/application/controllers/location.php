<?php
    require_once '../connect.php';
/**
 * 요청SQL
 */
    $sql = '';

    $sql = "SELECT
                *
            FROM
                TRAVLE_INFO";
//************************************************************** */

/**
 * 반환
 */
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    echo $row['location_name'];
?>