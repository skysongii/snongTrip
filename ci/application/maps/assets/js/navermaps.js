

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
			lng	: '127.076986',
			period : '2023.04.22',
			contents : 
			{
				place : '녹차밭'
			}
		}
	],
	[
		{
			name : '을왕리',
			lat	: '37.447610',
			lng	: '126.372686',
			period : '2023.10.14 ~ 2023.10.15',
			contents : 
			{
				place : '을왕리 해수욕장'
			}
		}
	],
	[
		{
			name : '순천',
			lat	: '34.9668',
			lng	: '127.5037',
			period : '2023.2.11 ~ 2023.2.12',
			contents : 
			{
				place : '펜션...'
			}
		}
	],
	[
		{
			name : '전주',
			lat	: '35.8187',
			lng	: '127.1539',
			period : '2023.2.11 ~ 2023.2.12',
			contents : 
			{
				place 	: '한옥마을',
				stay	: '비하녹'
			}
		}
	],

]

/**--------------------------------------------------------------------------------------- */

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

				
				location_explain.innerText	= "대한민국";
				// location_lead.innerText		= "";
				location_name.innerText		= title_name;
				location_period.innerText	= period;
				lead_place_q.innerText		= "장소";
				lead_place_a.innerText		= place;

			}
		});
	}
	for (var i=0, ii=markers.length; i<ii; i++) {

		naver.maps.Event.addListener(markers[i], 'click', getClickHandler(i)); // 클릭한 마커 핸들러
		console.log('넘길 때 마커 : ',markers[i].title);	// 마커값 테스트
	}


		