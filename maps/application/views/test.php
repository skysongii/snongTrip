<div id="product-list__wrap">
            <div id="product-list-all" class="list__container">
                <div id="maemul-count" class="font-nanum">

                    <div id="product-count">매물 목록 : &nbsp;<span id="maemul-cnt"></span>&nbsp;개</div>
                    <div id="my-product">나의 상품 보기</div>

                </div>
                <?php

                /**
                 * @author : csh
                 * @date : 2022-07-07
                 * 매물 리스트
                 */
                $location_info = [];
                $markers_info = [];

                if ($user_level == 9) {  // 3일 무료
                    $get_one_room_info = $wpdb->get_results("SELECT 
                                                    wp.ID, wp.post_title, wp.post_name,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_number-of-floors' AND post_id=wp.ID) AS number_of_floor,
                                                    REPLACE(REPLACE(wpm.meta_value, '대한민국' ,''), '%부', '') AS job_location,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_job_phone' AND post_id=wp.ID) AS phone_number,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_lat' AND post_id=wp.ID) AS geolocation_lat,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_long' AND post_id=wp.ID) AS geolocation_long,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_month-deposit' AND post_id=wp.ID), 0) AS month_deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly-rent' AND post_id=wp.ID), 0) AS month_rent,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_administrative-expenses' AND post_id=wp.ID), 0) AS administrative_expenses,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-price-per-month' AND post_id=wp.ID), 0) AS rent_price_per_month,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-admin-expensive' AND post_id=wp.ID), 0) AS rent_adimin_expensive,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_trade-price' AND post_id=wp.ID), 0) AS trade_price

                                                FROM 
                                                    wp_posts wp
                                                LEFT JOIN wp_postmeta wpm ON wpm.meta_key='_job_location' AND  wp.ID = wpm.post_id
                                                LEFT JOIN wp_term_relationships rel ON wp.ID = rel.object_id
                                                WHERE wpm.meta_value like '%$city%' 
                                                    AND wpm.meta_value like '%$gun_goo%'
                                                    AND wp.post_status = 'publish' 
                                                    AND rel.term_taxonomy_id = 20 ORDER BY RAND();");
                } elseif ($user_level == 4) {  // 베이직(원룸)
                    $get_one_room_info = $wpdb->get_results("SELECT 
                                                    wp.ID, wp.post_title, wp.post_name,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_number-of-floors' AND post_id=wp.ID) AS number_of_floor,
                                                    REPLACE(REPLACE(wpm.meta_value, '대한민국' ,''), '%부', '') AS job_location,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_job_phone' AND post_id=wp.ID) AS phone_number,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_lat' AND post_id=wp.ID) AS geolocation_lat,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_long' AND post_id=wp.ID) AS geolocation_long,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_month-deposit' AND post_id=wp.ID), 0) AS month_deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly-rent' AND post_id=wp.ID), 0) AS month_rent,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_administrative-expenses' AND post_id=wp.ID), 0) AS administrative_expenses,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-price-per-month' AND post_id=wp.ID), 0) AS rent_price_per_month,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-admin-expensive' AND post_id=wp.ID), 0) AS rent_adimin_expensive,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_trade-price' AND post_id=wp.ID), 0) AS trade_price

                                                FROM 
                                                    wp_posts wp
                                                LEFT JOIN wp_postmeta wpm ON wpm.meta_key='_job_location' AND  wp.ID = wpm.post_id
                                                LEFT JOIN wp_term_relationships rel ON wp.ID = rel.object_id
                                                WHERE wpm.meta_value like '%$city%' 
                                                    AND wpm.meta_value like '%$gun_goo%'
                                                    AND wp.post_status = 'publish' 
                                                    AND rel.term_taxonomy_id = 20");
                } elseif ($user_level == 5) {  // 스탠다드(아파트/빌라)
                    $get_one_room_info = $wpdb->get_results("SELECT 
                                                    wp.ID, wp.post_title, wp.post_name,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_number-of-floors' AND post_id=wp.ID) AS number_of_floor,
                                                    REPLACE(REPLACE(wpm.meta_value, '대한민국' ,''), '%부', '') AS job_location,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_job_phone' AND post_id=wp.ID) AS phone_number,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_lat' AND post_id=wp.ID) AS geolocation_lat,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_long' AND post_id=wp.ID) AS geolocation_long,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_month-deposit' AND post_id=wp.ID), 0) AS month_deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly-rent' AND post_id=wp.ID), 0) AS month_rent,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_administrative-expenses' AND post_id=wp.ID), 0) AS administrative_expenses,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-price-per-month' AND post_id=wp.ID), 0) AS rent_price_per_month,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-admin-expensive' AND post_id=wp.ID), 0) AS rent_adimin_expensive,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_trade-price' AND post_id=wp.ID), 0) AS trade_price

                                                FROM 
                                                    wp_posts wp
                                                LEFT JOIN wp_postmeta wpm ON wpm.meta_key='_job_location' AND  wp.ID = wpm.post_id
                                                LEFT JOIN wp_term_relationships rel ON wp.ID = rel.object_id
                                                WHERE wpm.meta_value like '%$city%' 
                                                    AND wpm.meta_value like '%$gun_goo%'
                                                    AND wp.post_status = 'publish'
                                                    AND rel.term_taxonomy_id IN (20, 17) ORDER BY RAND();");
                } elseif ($user_level == 6) {  // 프리미엄(상가임대)
                    $get_one_room_info = $wpdb->get_results("SELECT 
                                                    wp.ID, wp.post_title, wp.post_name,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_number-of-floors' AND post_id=wp.ID) AS number_of_floor,
                                                    REPLACE(REPLACE(wpm.meta_value, '대한민국' ,''), '%부', '') AS job_location,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_job_phone' AND post_id=wp.ID) AS phone_number,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_lat' AND post_id=wp.ID) AS geolocation_lat,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_long' AND post_id=wp.ID) AS geolocation_long,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_month-deposit' AND post_id=wp.ID), 0) AS month_deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly-rent' AND post_id=wp.ID), 0) AS month_rent,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_administrative-expenses' AND post_id=wp.ID), 0) AS administrative_expenses,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-price-per-month' AND post_id=wp.ID), 0) AS rent_price_per_month,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-admin-expensive' AND post_id=wp.ID), 0) AS rent_adimin_expensive,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_trade-price' AND post_id=wp.ID), 0) AS trade_price

                                                FROM 
                                                    wp_posts wp
                                                LEFT JOIN wp_postmeta wpm ON wpm.meta_key='_job_location' AND  wp.ID = wpm.post_id
                                                LEFT JOIN wp_term_relationships rel ON wp.ID = rel.object_id
                                                WHERE wpm.meta_value like '%$city%' 
                                                    AND wpm.meta_value like '%$gun_goo%'
                                                    AND wp.post_status = 'publish' 
                                                    AND rel.term_taxonomy_id IN (20, 17, 246) ORDER BY RAND();");
                } elseif ($user_level == 8) {  // 챌린저(수익형 부동산)
                    $get_one_room_info = $wpdb->get_results("SELECT 
                                                    wp.ID, wp.post_title, wp.post_name,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_number-of-floors' AND post_id=wp.ID) AS number_of_floor,
                                                    REPLACE(REPLACE(wpm.meta_value, '대한민국' ,''), '%부', '') AS job_location,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_job_phone' AND post_id=wp.ID) AS phone_number,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_lat' AND post_id=wp.ID) AS geolocation_lat,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_long' AND post_id=wp.ID) AS geolocation_long,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_month-deposit' AND post_id=wp.ID), 0) AS month_deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly-rent' AND post_id=wp.ID), 0) AS month_rent,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_administrative-expenses' AND post_id=wp.ID), 0) AS administrative_expenses,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-price-per-month' AND post_id=wp.ID), 0) AS rent_price_per_month,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-admin-expensive' AND post_id=wp.ID), 0) AS rent_adimin_expensive,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_trade-price' AND post_id=wp.ID), 0) AS trade_price,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_sale-price' AND post_id=wp.ID), 0) AS sale_price,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_loan' AND post_id=wp.ID), 0) AS loan,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_deposit' AND post_id=wp.ID), 0) AS deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly' AND post_id=wp.ID), 0) AS monthly

                                                FROM 
                                                    wp_posts wp
                                                LEFT JOIN wp_postmeta wpm ON wpm.meta_key='_job_location' AND  wp.ID = wpm.post_id
                                                LEFT JOIN wp_term_relationships rel ON wp.ID = rel.object_id
                                                WHERE wpm.meta_value like '%$city%' 
                                                    AND wpm.meta_value like '%$gun_goo%'
                                                    AND wp.post_status = 'publish' 
                                                    AND rel.term_taxonomy_id IN (20, 17, 246 ,247) ORDER BY RAND();");
                } elseif ($user_level == 10) {
                    $get_one_room_info = $wpdb->get_results("SELECT 
                                                    wp.ID, wp.post_title, wp.post_name,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_number-of-floors' AND post_id=wp.ID) AS number_of_floor,
                                                    REPLACE(REPLACE(wpm.meta_value, '대한민국' ,''), '%부', '') AS job_location,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='_job_phone' AND post_id=wp.ID) AS phone_number,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_lat' AND post_id=wp.ID) AS geolocation_lat,
                                                    (SELECT meta_value FROM wp_postmeta WHERE meta_key='geolocation_long' AND post_id=wp.ID) AS geolocation_long,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_month-deposit' AND post_id=wp.ID), 0) AS month_deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly-rent' AND post_id=wp.ID), 0) AS month_rent,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_administrative-expenses' AND post_id=wp.ID), 0) AS administrative_expenses,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-price-per-month' AND post_id=wp.ID), 0) AS rent_price_per_month,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_rent-admin-expensive' AND post_id=wp.ID), 0) AS rent_adimin_expensive,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_trade-price' AND post_id=wp.ID), 0) AS trade_price,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_sale-price' AND post_id=wp.ID), 0) AS sale_price,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_loan' AND post_id=wp.ID), 0) AS loan,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_deposit' AND post_id=wp.ID), 0) AS deposit,
                                                    IFNULL((SELECT meta_value FROM wp_postmeta WHERE meta_key='_monthly' AND post_id=wp.ID), 0) AS monthly
                                                FROM 
                                                    wp_posts wp
                                                LEFT JOIN wp_postmeta wpm ON wpm.meta_key='_job_location' AND  wp.ID = wpm.post_id
                                                WHERE wpm.meta_value like '%동래구%' 
                                                    -- AND wpm.meta_value like '%$gun_goo%'
                                                    AND wp.post_status = 'publish' ORDER BY RAND();");
                }

                foreach ($get_one_room_info as $row) {
                    $wp_id = $row->ID;                       // ID (INDEX)
                    $post_title = $row->post_title;               // 제목
                    $number_of_floor = $row->number_of_floor;          // 호실
                    $job_location = $row->job_location;             // 주소
                    $phone_number = $row->phone_number;             // 핸드폰
                    $geolocation_lat = $row->geolocation_lat;          // 좌표
                    $geolocation_long = $row->geolocation_long;         // 좌표
                    $month_deposit = $row->month_deposit;            // 보증금
                    $month_rent = $row->month_rent;               // 월세
                    $administrative_expenses = $row->administrative_expenses;  // 월세 관리비 포함 여부
                    $rent_price_per_month = $row->rent_price_per_month;     // 전세
                    $rent_admin_expensive = $row->rent_adimin_expensive;    // 전세 관리비
                    $trade_price = $row->trade_price;              // 매매가
                    $post_name = $row->post_name;                // 상세정보 창
                    $sale_price = $row->sale_price;               // 수익형 부동산 매매가
                    $loan = $row->loan;                     // 수익형 부동산 융자금
                    $deposit = $row->deposit;                  // 수익형 부동산 보증금
                    $monthly = $row->monthly;                  // 수익형 부동산 월세

                    $phone_number_rel = str_replace(' ', '', $phone_number);
                    $job_location_explode = explode(' ', $job_location);
                    $job_location_size = count($job_location_explode);

                    $month_deposit_len = strlen($month_deposit);           // 월세 전세 매매 구분
                    $rent_price_per_month_len = strlen($rent_price_per_month);    // ""
                    $trade_price_len = strlen($trade_price);             // ""

                    $month_deposit = number_format((int) $month_deposit);           // 월세 콤마
                    $rent_price_per_month = number_format((int) $rent_price_per_month);    // 전세 콤마
                    $trade_price = number_format((int) $trade_price);             // 매매 콤마
                    $sale_price = number_format((int) $sale_price);              // 수익형 부동산 매매가 콤마
                    $loan = number_format((int) $loan);                    // 수익형 부동산 융자금 콤마
                    $deposit = number_format((int) $deposit);                    // 수익형 부동산 보증금 콤마
                    $monthly = number_format((int) $monthly);                    // 수익형 부동산 월세 콤마

                    $geolocation_lat_length = strlen($geolocation_lat); ?>

                    <?php
                    /**
                     * @author : csh
                     * @date   : 2022-07-19
                     * 원룸, 아파트 구분 (카테고리)
                     */
                    $category_info = $wpdb->get_results("SELECT 
                                                        rel.object_id, rel.term_taxonomy_id
                                                    FROM
                                                        wp_term_relationships AS rel
                                                    LEFT JOIN wp_term_taxonomy wtt ON wtt.term_taxonomy_id = rel.term_taxonomy_id
                                                    LEFT JOIN wp_terms wt ON wt.term_id = wtt.term_id
                                                    LEFT JOIN wp_posts wp ON wp.ID = rel.object_id
                                                    WHERE
                                                        rel.object_id = '$wp_id'
                                                        AND wp.post_status = 'publish'");
                    foreach ($category_info as $row) {
                        $category_gubun = $row->name;
                        $term_taxonomy_id = $row->term_taxonomy_id;
                        if ($term_taxonomy_id == 17) {
                            $category = 'APT/빌라';
                        } elseif ($term_taxonomy_id == 20) {
                            $category = '원/투/쓰리룸';
                        } elseif ($term_taxonomy_id == 246) {
                            $category = '상가임대';
                        } elseif ($term_taxonomy_id == 247) {
                            $category = '수익형 부동산';
                        } elseif ($term_taxonomy_id == 26) {
                            $tag = '원룸';
                        } elseif ($term_taxonomy_id == 25) {
                            $tag = '투룸';
                        } elseif ($term_taxonomy_id == 24) {
                            $tag = '쓰리룸';
                        }
                        // echo $category;
                    }
                    // echo $category;

                    if ($month_deposit > 0 && $rent_price_per_month == 0 && $trade_price == 0) {          // 월세
                        $tag_gubun = '월세';
                    } elseif ($month_deposit == 0 && $rent_price_per_month > 0 && $trade_price == 0) {   // 전세
                        $tag_gubun = '전세';
                    } elseif ($month_deposit == 0 && $rent_price_per_month == 0 && $trade_price > 0) {       // 매매
                        $tag_gubun = '매매';
                    } elseif ($month_deposit > 0 && $rent_price_per_month > 0 && $trade_price == 0) {      // 월/전세
                        $tag_gubun = '월/전세';
                    } elseif ($month_deposit > 0 && $rent_price_per_month > 0 && $trade_price_len > 0) {
                        $tag_gubun = '월/전세/매매';
                    }

                    array_push($location_info, [
                        'wp_id' => $wp_id,
                        'post_title' => $post_title,
                        'job_location' => $job_location,
                        'month_deposit' => $month_deposit,
                        'month_rent' => $month_rent,
                        'administrative_expenses' => $administrative_expenses,
                        'rent_price_per_month' => $rent_price_per_month,
                        'rent_admin_expensive' => $rent_admin_expensive,
                        'lat' => $geolocation_lat,
                        'lng' => $geolocation_long,
                        'category' => $category,
                        'tag_gubun' => $tag_gubun,
                        'trade_price' => $trade_price,
                        'phone_number' => $phone_number,
                        'tag' => $tag,
                        'sale_price' => $sale_price,
                        'loan' => $loan,
                        'deposit' => $deposit,
                        'monthly' => $monthly,
                    ]);

                    $get_guid = $wpdb->get_var("SELECT  
                                            `guid`
                                        FROM 
                                            wp_posts wp
                                        WHERE 
                                            wp.post_parent = $wp_id AND
                                            wp.post_type = 'attachment' LIMIT 1 ");
                    $guid = @$get_guid; ?>
                    <div class="content-item font-nanum" data-wpid="<?php echo $wp_id; ?>">
                        <div id="detail-box" class="detail-box">
                            <div class="col__left" onclick="move_marker(<?php echo $geolocation_lat; ?> ,<?php echo $geolocation_long; ?>);">
                                <div class="detail-picture">
                                    <?php
                                    if (is_null($guid)) { ?>
                                        <img src='./addImage/none3.png' style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
                                    <?php } else { ?>
                                        <img src="<?php echo $guid; ?>" alt="" style="width:100%; height:100%;  border-radius:10px;">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col__right">
                                <div class="detail__add">
                                    <div class="detail-title" onclick="move_marker(<?php echo $geolocation_lat; ?> ,<?php echo $geolocation_long; ?>);">
                                        <?php echo $post_title . ' ' . $number_of_floor; ?>
                                    </div>
                                    <div class="detail-address" onclick="move_marker(<?php echo $geolocation_lat; ?> ,<?php echo $geolocation_long; ?>);">
                                        <?php
                                        for ($i = 2; $i < $job_location_size; ++$i) {
                                            echo $job_location_explode[$i] . ' ';
                                        } ?>
                                    </div>
                                </div>
                                <div class="detail__top" onclick="move_marker(<?php echo $geolocation_lat; ?> ,<?php echo $geolocation_long; ?>);">
                                    <div class="detail-type">
                                        <?php
                                        if ($category == '원/투/쓰리룸') { ?>
                                            <img src="./addImage/category_one_room1.png">
                                        <?php } elseif ($category == 'APT/빌라') { ?>
                                            <img src="./addImage/category_apart1.png">
                                        <?php } elseif ($category == '상가임대') { ?>
                                            <img src="./addImage/category_shopping2.png">
                                        <?php } elseif ($category == '수익형 부동산') { ?>
                                            <img src="./addImage/category_benefit.png">
                                        <?php } ?>
                                    </div>
                                    <div class="detail-gubun" onclick="move_marker(<?php echo $geolocation_lat; ?> ,<?php echo $geolocation_long; ?>);">
                                        <?php
                                        if ($tag_gubun == '월세') { ?>
                                            <img src="./addImage/tag_month_rent.png">
                                        <?php } elseif ($tag_gubun == '전세') { ?>
                                            <img src="./addImage/tag_long_rent.png">
                                        <?php } elseif ($tag_gubun == '월/전세') { ?>
                                            <img src="./addImage/tag_both_month_long_rent.png">
                                        <?php } elseif ($tag_gubun == '매매') { ?>
                                            <img src="./addImage/tag_trade.png">
                                        <?php } elseif ($tag_gubun == '월/전세/매매') { ?>
                                            <img src="./addImage/tag_all.png">
                                        <?php } ?>

                                    </div>
                                </div>


                                <div class="detail__mid" onclick="move_marker(<?php echo $geolocation_lat; ?> ,<?php echo $geolocation_long; ?>);">
                                    <div class="detail-price">
                                        <?php
                                        if ($month_deposit > 0 && $rent_price_per_month == 0 && $trade_price == 0) {          // 월세
                                            echo $month_deposit . ' / ' . $month_rent . ' / ' . $administrative_expenses . "<div style='font-size:0.7rem; text-align:right'>(만원 단위)</div>";
                                        } elseif ($month_deposit == 0 && $rent_price_per_month > 0 && $trade_price == 0) {   // 전세
                                            echo $rent_price_per_month . ' 만원 / ' . $rent_admin_expensive . "<div style='font-size:0.7rem; text-align:right'>(만원 단위)</div>";
                                        } elseif ($month_deposit > 0 && $rent_price_per_month > 0 && $trade_price == 0) {      // 월/전세
                                            echo '월 : ' . $month_deposit . ' / ' . $month_rent . ' / ' . $administrative_expenses . '<br>전 : ' . $rent_price_per_month . ' 만원 / ' . $rent_admin_expensive . "<div style='font-size:0.7rem; text-align:right'>(만원 단위)</div>";
                                        } elseif ($month_deposit == 0 && $rent_price_per_month == 0 && $trade_price > 0) {
                                            echo $trade_price . ' 만원' . "<div style='font-size:0.7rem; text-align:right'>(만원 단위)</div>";
                                        }
                                        // 수익형 부동산
                                        elseif ($month_deposit == 0 && $rent_price_per_month == 0 && $trade_price == 0 && ($sale_price > 0 || $loan > 0 || $deposit > 0 || $monthly > 0)) {
                                            // echo "상세 정보를 이용해주세요.";
                                            echo '매매가 : ' . $sale_price . "<div style='font-size:0.7rem; text-align:right'>(만원 단위)</div>";
                                        } ?>
                                    </div>
                                    <!-- <div class="detail-phone" style="width:50%;  height:11%; border:1px; float:left; margin-left:3%; margin-top:2%; font-size:18px; font-weight:bold;" ><?php echo $phone_number_rel; ?></div> -->
                                </div>
                                <div class="detail__bott">
                                    <div class="detail-page">
                                        <img src="./addImage/detail_page.png" onclick="move_popup('<?php echo $post_name; ?>');">
                                    </div>
                                    <div class="detail-phone">
                                        <img src="./addImage/phone_number.png" onclick="move_phone('<?php echo $post_title; ?>');">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }

                $location_arr_length = sizeof($location_info);
                ?>
            </div>
        </div>
    </div>