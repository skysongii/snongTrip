let modal_cancel = document.getElementById('modal-cancel');
let modal_save = document.getElementById('modal-save');


// 모달창 등록버튼 클릭
const modal = document.querySelector('.modal');
const btnOpenModal=document.querySelector('#content-insert');

btnOpenModal.addEventListener("click", ()=>{
    modal.style.display="flex";
});

// 모달창 닫기
modal_cancel.addEventListener('click', function () {
    modal.style.display = 'none';
});

// 모달창 저장버튼
modal_save.addEventListener('click', function () {
    
});
