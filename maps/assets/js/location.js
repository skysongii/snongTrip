
/**
 * @author  : csh
 * date     : 2024-1-4
 * 마커 좌표
 * 
 * [
 * 	{
 * 		}
	* name 		: 지역명
	* lat  		: 위도
	* lng			: 경도
	* start_period : 출발일
	* end_period 	: 종료일
	* place		: {
	* 		visit	: 가본 장소,
	* 		stay	: 숙소명					
	* }
	}
 * ]
*/
let kor_location = 
[
	[
		{
			name 			: '보성',
			lat				: '34.715536',
			lng				: '127.076986',
			start_period 	: '2023.4.22',
			end_period		: '2023.4.22',
			place : 
			{
				visit 	: ['녹차밭'],
				stay	: []
			}
		}
	],
	[
		{
			name 			: '을왕리',
			lat				: '37.447610',
			lng				: '126.372686',
			start_period	: '2023.10.14',
			end_period		: '2023.10.15',
			place : 
			{
				visit 	: ['을왕리 해수욕장', '태종대회조개구이'],
				stay	: []
			}
		}
	],
	[
		{
			name 			: '순천',
			lat				: '34.9668',
			lng				: '127.5037',
			start_period	: '2023.2.11',
			end_period		: '2023.2.12',
			place : 
			{
				visit 	: [''],
				stay	: ['머물 인 어우림']
			}
		}
	],
	[
		{
			name 			: '전주',
			lat				: '35.8187',
			lng				: '127.1539',
			start_period	: '2023.2.11',
			end_period		: '2023.2.12',
			place : 
			{
				visit 	: ['한옥마을'],
				stay	: ['비하녹']
			}
		}
	],

]

/**--------------------------------------------------------------------------------------- */
export { kor_location };