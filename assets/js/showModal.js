const showModal = (modalId) => {
    const modal = document.getElementById(modalId);

    if (modal) {
        modal.classList.add("show-modal");

        modal.addEventListener("click", (e) => {
            if (e.target.className == "close-modal" || e.target.id == modalId) {
                modal.classList.remove("show-modal")
            }
        })
    }
}

const selectButtonDeleteAccount = document.querySelector('.button-delete-account');

if (selectButtonDeleteAccount != null) {
    selectButtonDeleteAccount.addEventListener("click", _ => {
        showModal("container-modal");
    })
}


const selectButtonRequestService = document.querySelector('.button-request-service');

if (selectButtonRequestService != null) {
    selectButtonRequestService.addEventListener("click", _ => {
        showModal("container-modal");
    })
}

const selectButtonCloseRequest = document.querySelector('.button-close-request');

if (selectButtonCloseRequest != null) {
    selectButtonCloseRequest.addEventListener("click", _ => {
        showModal("container-modal");
    })
}

const selectButtonConfirmService = document.querySelector('.button-confirm-service');

if (selectButtonConfirmService != null) {
    selectButtonConfirmService.addEventListener("click", _ => {
        showModal("container-modal-confirm-service");
    })
}

const selectButtonFinishService = document.querySelector('.button-finish-service');

if (selectButtonFinishService != null) {
    selectButtonFinishService.addEventListener("click", _ => {
        showModal("container-modal-finish-service");
    })
}