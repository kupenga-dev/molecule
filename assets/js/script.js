"use strict"
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);
    async function formSend(event) {
        event.preventDefault();
        let data = {};
        let error = formValidate(form);
        let formData = new FormData(form);
        formData.forEach((value, key) => data[key] = Number(value));
        let jsonData = JSON.stringify(data);
        if (error === 0) {
            form.classList.add('_sending');
            let response = await fetch('action.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                dataType: 'JSON',
                body: jsonData
            }).then((res) => res.json().then(response => {
                console.log(response);
                let output = '';
                output += `<tr>
                    <td>${response['green']}</td>
                    <td>${response['red']}</td>
                    </tr>`;
                document.querySelector('.tbody').innerHTML = output;
            })).catch(error => console.log(error));

        } else {
            alert('Поля заполнены некорректно');
        }
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');
        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);
            if (input.value === '') {
                formAddError(input);
                error++;
            }
        }
        return error;
    }

});

function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
}

function formRemoveError(input) {
    input.parentElement.classList.remove('_error');
    input.classList.remove('_error');
}