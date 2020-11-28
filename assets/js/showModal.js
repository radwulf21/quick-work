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

const selectButtonRequestService = document.querySelector('.button-request-service');

if (selectButtonRequestService != null) {
    selectButtonRequestService.addEventListener("click", _ => {
        showModal("container-modal");
    })
}

const selectButtonCloseModal = document.querySelector('.button-close-request');

if (selectButtonCloseModal != null) {
    selectButtonCloseModal.addEventListener("click", _ => {
        showModal("container-modal");
    })
}