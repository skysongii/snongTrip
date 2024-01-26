let modal_cancel    = document.getElementById('modal-cancel'); // 모달창 닫기
let modal_save      = document.getElementById('modal-save');     // 모달창 저장
let modal_stay      = document.getElementById('modal-stay');
let modal_food      = document.getElementById('modal-food');
let modal_place      = document.getElementById('modal-place');

// 모달창 등록버튼 클릭
const modal = document.querySelector('.modal');
const btnOpenModal=document.querySelector('#content-insert');

btnOpenModal.addEventListener("click", ()=>{
    modal.style.display = "block";
});

// 모달창 닫기
modal_cancel.addEventListener('click', function () {
    modal.style.display = 'none';
});

// 모달창 저장버튼
modal_save.addEventListener('click', function () {
    let stay_val    = modal_stay.value;
    let food_val    = modal_food.value;
    let food_place  = modal_place.value;
    // console.log(stay_val);
    // console.log(food_val);
    // console.log(food_place);
});
