
/**
 * 2023-11-01
 * @author -> csh
 * Open API 페이지 리다이렉트
 */

let goWhois = () => {
    setTimeout(() => {
        // readyToPage();
        location.href = '/WhoisController';
    }, 2000);
    var element = document.getElementById('change-typed')
    element.innerHTML = '<h2 id="change-typed" class="blink">  Open API 페이지로 이동합니다</h2>';
    // console.log(1);
}

/**
 * 2023-11-16
 * @author -> csh
 * 자유게시판 리다이렉트
 */

let goBoard = () => {
    setTimeout(() => {
        location.href = '/BoardController/page';
        console.log("준비중입니다!");
    }, 0);
    var element = document.getElementById('change-typed')
    element.innerHTML = '<h2 id="change-typed" class="blink">  자유게시판 페이지로 이동합니다</h2>';
}

/**
 * 2023-1-3
 * @author -> csh
 * 국내여행 리다이렉트
 */

let domesticTrip = () => {
    setTimeout(() => {
        // location.href = 'http://localhost/local/maps/application/views/domestic.php';
    }, 0);
    var element = document.getElementById('change-typed')
    element.innerHTML = '<h2 id="change-typed" class="blink">  자유게시판 페이지로 이동합니다</h2>';
}
// local\maps\application\views\domestic.php
// C:\xampp\htdocs\local\maps\application\views\domestic.php
/**
 * 2024-1-3
 * @author -> csh
 * 해외여행 리다이렉트
 */

let overseasTrip = () => {
    setTimeout(() => {
        location.href = '/BoardController/page';
    }, 0);
    var element = document.getElementById('change-typed')
    element.innerHTML = '<h2 id="change-typed" class="blink">  자유게시판 페이지로 이동합니다</h2>';
}



/**
 * 2023-11-01
 * @author -> csh
 */

const readyToPage = () => {
    alert("곧 찾아뵙겠습니다..ㅠㅠ");
}