//지도를 삽입할 HTML 요소 또는 HTML 요소의 id를 지정합니다.
const mapDiv = document.getElementById('map'); // 'map'으로 선언해도 동일

//지도 생성 시에 옵션을 지정할 수 있습니다.
var map = new naver.maps.Map('map', {
  center: new naver.maps.LatLng(37.3595704, 127.105399), //지도의 초기 중심 좌표
  zoom: 13, //지도의 초기 줌 레벨
  minZoom: 7, //지도의 최소 줌 레벨
  zoomControl: true, //줌 컨트롤의 표시 여부
  zoomControlOptions: { //줌 컨트롤의 옵션
      position: naver.maps.Position.TOP_RIGHT
  }
});

// naver.maps.Event.once(map, 'init', function () {
//   console.log('올바른 참조 시점', map.getOptions('minZoom') === 10);
// });

map.setOptions("disableKineticPan", false);   // 관성 드래깅 켜기
map.setOptions("tileTransition", true);       // 타일 fadeIn 효과 켜기

naver.maps.Event.addListener(map, 'zoom_changed', function (zoom) {
  console.log('zoom:' + zoom);
});