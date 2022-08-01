function initAddCard(){

    let addCardBacklog = document.querySelector('.backlog_btn_AddCard');
    let btnSubmitBacklog = document.querySelector('.backlog_btn_submit');
    let inputBacklog = document.querySelector('.backlog_message');

    let addCardReady = document.querySelector('.Ready_btn_AddCard');
    let btnSubmitReady = document.querySelector('.Ready_btn_submit');
    let inputReady = document.querySelector('.Ready_message');

    let addCardProgres = document.querySelector('.Progres_btn_AddCard');
    let btnSubmitProgres = document.querySelector('.Progres_btn_submit');
    let inputProgres = document.querySelector('.Progres_message');

    let addCardFinished = document.querySelector('.Finished_btn_AddCard');
    let btnSubmitFinished = document.querySelector('.Finished_btn_submit');
    let inputFinished = document.querySelector('.Finished_message');

    addCardBacklog.addEventListener("click", () => {
        addCardBacklog.classList.add("active");
        btnSubmitBacklog.classList.add("active");
        inputBacklog.classList.add("active");
    });

    btnSubmitBacklog.addEventListener("click", () => {
        addCardBacklog.classList.remove("active");
        btnSubmitBacklog.classList.remove("active");
        inputBacklog.classList.remove("active");
    });

    addCardReady.addEventListener("click", () => {
        addCardReady.classList.add("active");
        btnSubmitReady.classList.add("active");
        inputReady.classList.add("active");
    });

    btnSubmitReady.addEventListener("click", () => {
        addCardReady.classList.remove("active");
        btnSubmitReady.classList.remove("active");
        inputReady.classList.remove("active");
    });

    addCardProgres.addEventListener("click", () => {
        addCardProgres.classList.add("active");
        btnSubmitProgres.classList.add("active");
        inputProgres.classList.add("active");
    });

    btnSubmitProgres.addEventListener("click", () => {
        addCardProgres.classList.remove("active");
        btnSubmitProgres.classList.remove("active");
        inputProgres.classList.remove("active");
    });

    addCardFinished.addEventListener("click", () => {
        addCardFinished.classList.add("active");
        btnSubmitFinished.classList.add("active");
        inputFinished.classList.add("active");
    });

    btnSubmitFinished.addEventListener("click", () => {
        addCardFinished.classList.remove("active");
        btnSubmitFinished.classList.remove("active");
        inputFinished.classList.remove("active");
    });
}

document.addEventListener("DOMContentLoaded", function(){
    initAddCard();
})