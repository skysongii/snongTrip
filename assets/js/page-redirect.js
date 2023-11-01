
/**
 * 2023-11-01
 * @author: csh
 * Open API 페이지 리다이렉트
 */
let goWhois = () => {
    setTimeout(() => {
        location.href = '/WhoisController';
    }, 2000);
    var element = document.getElementById('change-typed')
    element.innerHTML = '<h2 id="change-typed" class="blink">  Open API 페이지로 이동합니다</h2>';
    // console.log(1);
}

// 준비중
const readyToPage = () => {
    alert("곧 찾아뵙겠습니다..ㅠㅠ");
}