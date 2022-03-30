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
        message.forEach(element => {
            if(element[0] === 'N') $($('.modal-error')[1]).css('color', '#FA1B43');
            if(element[0] === 'E') $($('.modal-error')[0]).css('color', '#FA1B43');
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