<html>
<head>
    <title>CodeIgniter 전체 조회</title>
</head>
<body>

<table>
    <tr>
        <th>번호</th>
        <th>이름</th>
        <th>URL</th>
        <th>KEY</th>
    </tr>
    <?php
    // 받아온 리스트 : $list
    // 단일 항목 : $item
    foreach($row as $item){
    ?>
    <tr><!-- 단일 항목인 $item으로 해당하는 값을 출력합니다. -->
        <td><?php echo $item -> idx;?></td>
        <td><?php echo $item -> k_name;?></td>
        <td><?php echo $item -> url;?></td>
        <td><?php echo $item -> api_key;?></td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>