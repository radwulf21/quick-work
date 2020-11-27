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

selectButtonRequestService.addEventListener("click", _ => {
    showModal("container-modal");
})