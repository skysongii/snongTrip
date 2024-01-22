import { kor_location } from "./location.js";

/** 마커 배열 선언 */
let markers 			= new Array();
let infowindows 		= new Array();
let location_lat_arr	= [];
let location_lng_arr	= [];

/** 좌표 변수 선언 */
let lat, lng; // 위도, 경도

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




var move_value = 0;

// 지도 이동시 move_value 값에 따라 updateMArkers 함수 실행 여부 판단
naver.maps.Event.addListener(map, 'idle', function() {
	if (move_value == 0) {
		updateMarkers(map, markers, move_value); // 지도 이동시 updateMarkers 실행
	} else {

	}
})

	


// 줌 이벤트
naver.maps.Event.addListener(map, "zoom_changed", function(zoom) {

});

let mapBounds = map.getBounds();
var marker, position;
// $(".content-item").hide();
console.log(mapBounds);
// 현재 보이는 지도의 경계
let ne_lat = mapBounds._ne._lat; // 북동쪽 위도
let ne_lng = mapBounds._ne._lng; // 북동쪽 경도
let sw_lat = mapBounds._sw._lat; // 남서쪽 위도
let sw_lng = mapBounds._sw._lng; // 남서쪽 경도


	console.log(`북동쪽 위도: ${ne_lat}`);
	console.log(`북동쪽 경도: ${ne_lng}`);
	console.log(`남서쪽 위도: ${sw_lat}`);
	console.log(`남서쪽 경도 : ${sw_lng}`);


// 마커 좌표 (JSON 길이만큼 출력)
for(i=0; i < kor_location.length; i++) {
	let location_lat = kor_location[i][0].lat;
	let location_lng = kor_location[i][0].lng;
	
	// 새로운 배열 만들어서 if문 충족하면 배열에 넣고 다시 돌리기?
	if((sw_lat < location_lat && location_lat < ne_lat) && (sw_lng < location_lng && ne_lng)) {
		// console.log(`location_latzz : ${location_lat}`);
		// console.log(`location_lng : ${location_lng}`);
	location_lat_arr.push(location_lat);		
	location_lng_arr.push(location_lng);		
	};
	console.log(`location_lat_arr : ${location_lat_arr}`);
	console.log(`location_lng_arr : ${location_lng_arr}`);
	let marker = new naver.maps.Marker({
		position: new naver.maps.LatLng(location_lat, location_lng),
		map: map,
		title : kor_location[i][0].name,
	});
}

for(i=0; i<location_lat_arr.length; i++) {
}

	// let marker = new naver.maps.Marker({
	// 	position: new naver.maps.LatLng(kor_location[i][0].lat, kor_location[i][0].lng),
	// 	map: map,
	// 	title : kor_location[i][0].name,
	// });

	let contentString = '<div id="info-content">'+ kor_location[i][0].name+'</div>';
	
	// 추가적인 속성
	let infowindow = new naver.maps.InfoWindow({
		content		: contentString,
		period 		: kor_location[i][0].period,
		contents	: kor_location[i][0].contents
	});

	markers.push(marker);
	infowindows.push(infowindow);

	
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

	// console.log(`지역 : ${title_name} , \n 배열 길이 : ${place.length}`); // 

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

// /**
//  * @author	: csh
//  * @date	: 2024-1-21
//  * @param {} map 
//  * @param {*} markers 
//  * @param {*} move_value 
//  * 지도 이동 시 이벤트
//  */
// let updateMarkers = (map, markers, move_value) => {
// 	let mapBounds = map.getBounds();
//         // var marker, position;
//         // $(".content-item").hide();
// 	console.log(mapBounds);
// 	// 현재 보이는 지도의 경계
// 	let ne_lat = mapBounds._ne._lat; // 북동쪽 위도
// 	let ne_lng = mapBounds._ne._lng; // 북동쪽 경도
// 	let sw_lat = mapBounds._sw._lat; // 남서쪽 위도
// 	let sw_lng = mapBounds._sw._lng; // 남서쪽 경도

// 	// console.log(`북동쪽 위도: ${ne_lat}`);
// 	// console.log(`북동쪽 경도: ${ne_lng}`);
// 	// console.log(`남서쪽 위도: ${sw_lat}`);
// 	// console.log(`남서쪽 경도 : ${sw_lng}`);
        
// 	// console.log(kor_location[0][0].name);

// 	let marker_lat = [];
// 	for(i=0; i<kor_location.length; i++) {
// 		let marker_lat = markers[i].position._lat;
// 		console.log(marker_lat);
// 	}
// };

function updateMarkers(map, markers) {

    var mapBounds = map.getBounds();
    var marker, position;

    for (var i = 0; i < markers.length; i++) {

        marker = markers[i]
        position = marker.getPosition();

        if (mapBounds.hasLatLng(position)) {
            showMarker(map, marker);
        } else {
            hideMarker(map, marker);
        }
    }
}

function showMarker(map, marker) {

    if (marker.getMap()) return;
    marker.setMap(map);
}

function hideMarker(map, marker) {

    if (!marker.getMap()) return;
    marker.setMap(null);
}
