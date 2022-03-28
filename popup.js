
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
            $('.modal-success-block').css('z-index', '0');
            $('.modal-success-block').css('opacity', '0');
        });
    })

}

openModal('site-menu', 'menu-modal', 'close-btn-trigger');
openModal('subscribe-open', 'subscribe-modal', 'close-btn');
openModal('policy-btn-for-modal', 'privacy-policy', 'close-btn');
openModal('cookie-btn-for-modal', 'cookie-policy', 'close-btn');


function getAnswer() {
    return fetch('./sendMail.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: $('#email-input').val(),
            name: $('#name-input').val()
        })
    })
        .then(response => {
            if (!response.ok) {
                if (response.status === 400) {
                    return response.json();
                } else {
                    return {
                        message: '500'
                    };
                }
            }
            else {
                return response.json();
            }
        })
}

document.getElementById('email-form-2').onsubmit = (e) => {
    e.preventDefault();
    let answer = getAnswer()
        .then(response => useResponseForAction(response.message))
}

let interval;

function useResponseForAction(message) {
    $('.modal-error').css('color', 'black');
    if (message === '500') {
        //something went wrong
    } else if (message != 'OK'){
        message.forEach((element, index) => {
            $($('.modal-error')[index]).css('color', '#FA1B43');
        });
    } 
    else {
        let c = 0;
        $('.modal-success-block').css('z-index', '1');
        interval = setInterval(() => {
            c += 0.01
            $('.modal-success-block').css('opacity', `${c}`);
            if (c > 1) clearInterval(interval);
        }, 10);
    }
}