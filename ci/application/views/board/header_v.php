<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>CodeIgniter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link type="text/css" rel='stylesheet' href="/todo/include/css/bootstrap.css" />

    <script>
        $(function () {
            $("#search_btn").click(function() {
                if ($("#q").val() == '') {
                    alert("검색어를 입력하세요,");
                    return false;
                } else {
                    // var act = "/board/"
                }
            }
        });
    </script>
</head>

<body>
    <div id="main">
        <header id="header" data-role="header" data-position="fixed">
            <blockquote>
                <p> 만들면서 배우는 CodeIgniter </p> <small>실행 예제</small>
            </blockquote>
        </header>
        <nav id="gnb">
            <ul>
                <li> <a rel="external" href="/bbs/<?php echo $this->uri->segment(1); ?>/lists/<?php echo $this->uri->segment(3); ?>"> 게시판 프로젝트 </a> </li>
            </ul>
        </nav>