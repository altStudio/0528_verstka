
const openModal = (triggerOpen,modal,triggerClose) => {
    let openBtn = document.querySelectorAll('.'+triggerOpen),
        modalContent = document.querySelector('.'+modal),
        closeBtn = document.querySelectorAll('.'+modal + ' ' + '.'+triggerClose);

    openBtn.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            modalContent.classList.add('modal-show');
        });
    })

    closeBtn.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            modalContent.classList.remove('modal-show');

        });
    })

}

openModal('site-menu', 'menu-modal', 'close-btn');
openModal('subscribe-open', 'subscribe-modal', 'close-btn');
openModal('policy-btn-for-modal', 'privacy-policy', 'close-btn');
openModal('cookie-btn-for-modal', 'cookie-policy', 'close-btn');