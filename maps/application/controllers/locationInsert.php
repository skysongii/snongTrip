<?php
    require_once '../connect.php';
/**
 * 요청SQL
 */
    $json_string = file_get_contents('php://input');

    $obj = json_decode($json_string);

    $lng = $obj->{"lng"};
    $lat = $obj->{"lat"};

    // $sql = "INSERT INTO travel_info ";
//************************************************************** */

/**
 * 반환
 */
    // $result = mysqli_query($con,$sql);

    // $row = mysqli_fetch_array($result);
    // echo $row['location_name'];
?>