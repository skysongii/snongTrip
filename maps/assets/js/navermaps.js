import { kor_location } from "./location.js";

/** 마커 배열 선언 */
let markers 		= new Array();
let infowindows 	= new Array();

// kor_location length
let latlng_len = kor_location.length;

//지도를 삽입할 HTML 요소 또는 HTML 요소의 id를 지정합니다.
const mapDiv = document.getElementById("map"); // 'map'으로 선언해도 동일

//지도 생성 시에 옵션을 지정할 수 있습니다.
const map = new naver.maps.Map("map", {
center: new naver.maps.LatLng(35.4799, 127.2892), //지도의 초기 중심 좌표
zoom: 7, //지도의 초기 줌 레벨
minZoom: 7, //지도의 최소 줌 레벨
zoomControl: true, //줌 컨트롤의 표시 여부
zoomControlOptions: {
	//줌 컨트롤의 옵션
	position: naver.maps.Position.TOP_RIGHT
}
});



map.setOptions("disableKineticPan", false); // 관성 드래깅 켜기
map.setOptions("tileTransition", true); // 타일 fadeIn 효과 켜기

// 현재 보이는 지도의 경계
var ne_lat = map.getBounds()._ne._lat; // 북동쪽 위도
var ne_lng = map.getBounds()._ne._lng; // 북동쪽 경도
var sw_lat = map.getBounds()._sw._lat; // 남서쪽 위도
var sw_lng = map.getBounds()._sw._lng; // 남서쪽 경도

console.log("ne_lat : ", ne_lat);
console.log("ne_lng : ", ne_lng);
console.log("sw_lat : ", sw_lat);
console.log("sw_lng : ", sw_lng);


naver.maps.Event.addListener(map, "zoom_changed", function(zoom) {

console.log("zoom:" + zoom);
});


	// 마커 좌표 (JSON 길이만큼 출력)
	for(i=0; i < kor_location.length; i++) {
		let marker = new naver.maps.Marker({
			position: new naver.maps.LatLng(kor_location[i][0].lat, kor_location[i][0].lng),
			map: map,
			title : kor_location[i][0].name,
		});

		let contentString = '<div id="info-content">'+ kor_location[i][0].name+'</div>';
		
		// 추가적인 속성
		let infowindow = new naver.maps.InfoWindow({
			content		: contentString,
			period 		: kor_location[i][0].period,
			contents	: kor_location[i][0].contents
		});

		markers.push(marker);
		infowindows.push(infowindow);

	}
	
	/**
	 * @author  : csh
	 * @date	: 2024-1-5
	 *  마커 클릭 핸들러
	 */

	let getClickHandler = (seq) => {
		let marker = markers[seq],
		infowindow = infowindows[seq];

		let title_name 	= infowindow.wrapper.innerText;
		let period		= infowindow.period;
		let place		= infowindow.contents.place;

		console.log(`지역 : ${title_name} , \n 배열 길이 : ${place.length}`); // 

		naver.maps.Event.addListener(marker, "click", function(e) {
			console.log('marker :' , marker);
			console.log('info :' , infowindow);
			if (infowindow.getMap()) {
				infowindow.close();			// 클릭 시 정보창 닫음
			} else {
				infowindow.open(map, marker); // 클릭시 정보창 출력

				// 마커 클릭 시 우측 글 변환
				let location_explain 	= document.getElementById("marker-explain");
				let location_lead		= document.getElementById("lead");
				let location_name 		= document.getElementById("location-name");
				let location_period 	= document.getElementById("location-period");
				let lead_place_q 		= document.getElementById("lead-place-q");
				let lead_place_a 		= document.getElementById("lead-place-a");
				let lead_stay_q 		= document.getElementById("lead-stay-q");
				let lead_stay_a 		= document.getElementById("lead-stay-a");

				
				location_explain.innerText	= "대한민국";
				// location_lead.innerText		= "";
				location_name.innerText		= title_name;
				location_period.innerText	= period;
				lead_place_q.innerText		= "가본곳 : ";
				// for (i=0; i<place.length; i++) {
				// 	console.log(place);
				// }
				lead_place_a.innerText		= place;

			}
		});
	}
	for (var i=0, ii=markers.length; i<ii; i++) {

		naver.maps.Event.addListener(markers[i], 'click', getClickHandler(i)); // 클릭한 마커 핸들러
		// console.log('넘길 때 마커 : ',markers[i].title);	// 마커값 테스트
	}


// Fetch API를 이용하여 데이터를 가져오는 함수 정의
async function asynchronousMarker() {
	try {
	  const response = await fetch('./location.js'); // 실제 파일 경로에 맞게 수정해주세요.
	  const data = await response;
	//   const data = await response.json();
  
	  // 가져온 데이터 활용 예시
	  console.log(data[0][0]);
  
	  // 여기에서 데이터 활용 로직을 작성하면 됩니다.
	  // 예를 들어, Naver Maps API를 사용하여 지도에 위치 표시 등...
	} catch (error) {
	  console.error('데이터를 가져오는 중 오류가 발생했습니다:', error);
	}
  }
  
  // asynchronousMarker 함수 호출
  asynchronousMarker();