
const openModal = (triggerOpen, modal, triggerClose) => {
    let openBtn = document.querySelectorAll('.' + triggerOpen),
        modalContent = document.querySelector('.' + modal),
        closeBtn = document.querySelectorAll('.' + modal + ' ' + '.' + triggerClose);

    openBtn.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            modalContent.classList.add('modal-show');
            scrollTriggers.forEach((trigger) => { trigger.disable() });
            scrolling.disable();
        });
    })

    closeBtn.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            modalContent.classList.remove('modal-show');
            scrollTriggers.forEach((trigger) => { trigger.enable() });
            scrolling.enable();
        });
    })

}

openModal('site-menu', 'menu-modal', 'close-btn-trigger');
openModal('subscribe-open', 'subscribe-modal', 'close-btn');
openModal('policy-btn-for-modal', 'privacy-policy', 'close-btn');
openModal('cookie-btn-for-modal', 'cookie-policy', 'close-btn');
openModal('open-video-modal', 'video-modal', 'close-btn');