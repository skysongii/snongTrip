/**
 * @author  : csh
 * date     : 2024-1-4
 * 마커 좌표
*/

let kor_location = 
[
	[
		{
			name : '보성',
			lat	: '34.715536',
			lng	: '127.076986'
		}
	],
	[
		{
			name : '을왕리',
			lat	: '34.9668',
			lng	: '127.5037'
		}
	],
	[
		{
			name : '순천',
			lat	: '37.447610',
			lng	: '126.372686'
		}
	]
]
/**--------------------------------------------------------------------------------------- */
// kor_location length
let latlng_len = kor_location.length;

//지도를 삽입할 HTML 요소 또는 HTML 요소의 id를 지정합니다.
const mapDiv = document.getElementById("map"); // 'map'으로 선언해도 동일

//지도 생성 시에 옵션을 지정할 수 있습니다.
const map = new naver.maps.Map("map", {
  center: new naver.maps.LatLng(36.996962, 127.141203), //지도의 초기 중심 좌표
  zoom: 13, //지도의 초기 줌 레벨
  minZoom: 7, //지도의 최소 줌 레벨
  zoomControl: true, //줌 컨트롤의 표시 여부
  zoomControlOptions: {
    //줌 컨트롤의 옵션
    position: naver.maps.Position.TOP_RIGHT
  }
});



map.setOptions("disableKineticPan", false); // 관성 드래깅 켜기
map.setOptions("tileTransition", true); // 타일 fadeIn 효과 켜기

naver.maps.Event.addListener(map, "zoom_changed", function(zoom) {
  console.log("zoom:" + zoom);
});

// 마커 좌표 (JSON 길이만큼 출력)
for(i=0; i <= latlng_len; i++) {

	console.log('name : ', kor_location[i][0].name);
	// let 
	var marker = new naver.maps.Marker({
		position: new naver.maps.LatLng(kor_location[i][0].lat, kor_location[i][0].lng),
		map: map
	});
}
