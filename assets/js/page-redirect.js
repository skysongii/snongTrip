
let goWhois = () => {
    setTimeout(() => {
        location.href = '/WhoisController';
    }, 2000);
    var element = document.getElementById('change-typed')
    element.innerHTML = '<h2 id="change-typed" class="blink">  Open API 페이지로 이동합니다</h2>';
}
    // Open API 이동
    function goWhois() {
        
    }

    // WDQ페이지 이동
    function goWDQ() {
        setTimeout(() => {
            location.href = 'http://10.11.51.224:9000/wiseda/loginform.do';
            window.open('wdq_detail.html', "alldata", "width=500, height=300;");
        }, 2000);
        var element = document.getElementById('change-typed');
        element.innerHTML = '<h1 id="change-typed" class="blink"> 곧 WiseDQ 페이지로 이동합니다</h1>';
    }

    // 목록등록관리시스템페이지 이동
    function goAllData() {
        setTimeout(() => {
            location.href = 'https://all.data.go.kr';
            window.open('alldata_detail.html', "alldata", "width=500, height=300;");
        }, 2000);
        var element = document.getElementById('change-typed');
        element.innerHTML = '<h1 id="change-typed" class="blink"> &nbsp; 곧 AllData 페이지로 이동합니다</h1>';
    }

    // 기관메타관리시스템 이동
    function goMeta() {
        setTimeout(() => {
            location.href = 'http://211.241.74.91:8090/gdp';
            window.open('meta_detail.html', "alldata", "width=500, height=300;");
        }, 2000);
        var element = document.getElementById('change-typed');
        element.innerHTML = '<h1 id="change-typed" class="blink"> &nbsp; 곧 기관메타 페이지로 이동합니다</h1>';
    }