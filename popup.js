
const openModal = (triggerOpen, modal, triggerClose) => {
    let openBtn = document.querySelectorAll('.' + triggerOpen),
        modalContent = document.querySelector('.' + modal),
        closeBtn = document.querySelectorAll('.' + modal + ' ' + '.' + triggerClose);

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

openModal('site-menu', 'menu-modal', 'close-btn-trigger');
openModal('subscribe-open', 'subscribe-modal', 'close-btn');
openModal('policy-btn-for-modal', 'privacy-policy', 'close-btn');
openModal('cookie-btn-for-modal', 'cookie-policy', 'close-btn');

document.getElementById('email-form-2').onsubmit = (e) => {
    e.preventDefault();
    fetch('./sendMail.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: $('#email-input').val(),
            name: $('#name-input').val()
        })
    })
    .then(data => {
        console.log(data);
    })
}